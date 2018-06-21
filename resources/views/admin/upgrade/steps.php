<?php use Fisharebest\Webtrees\I18N; ?>
<?php use Fisharebest\Webtrees\View; ?>

<?= view('admin/breadcrumbs', ['links' => [route('admin-control-panel') => I18N::translate('Control panel'), $title]]) ?>

<h1><?= $title ?></h1>

<p>
	<?= I18N::translate('It can take several minutes to download and install the upgrade. Be patient.') ?>
</p>

<dl>
	<?php foreach ($steps as $url => $text): ?>
	<dt><?= $text ?></dt>
	<dd class="wt-ajax-load" data-url="<?= e($url) ?>"></dd>
	<?php endforeach ?>
</dl>

<?php View::push('javascript') ?>
<script>
  function nextAjaxStep() {
    $("dd:empty:first").each(function(n, el) {
      $(el).load(el.dataset.url, {}, function (responseText, textStatus, req) {
        el.innerHTML = responseText;
        if (textStatus === "error") {
          $(".wt-ajax-load").removeClass("wt-ajax-load");
        } else {
          nextAjaxStep();
        }
      });

      // Only process one callback at a time.
      return false;
    });
  }

  nextAjaxStep();
</script>
<?php View::endpush() ?>
