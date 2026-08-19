<?php

declare(strict_types=1);

namespace Fisharebest\Webtrees\Services;

use Fisharebest\Webtrees\Fact;
use Fisharebest\Webtrees\Individual;
use Illuminate\Support\Collection;

use function preg_match;

final class IndividualNotesService
{
    public function __construct(
        private FactSortService $fact_sort_service,
    ) {
    }

    /**
     * Get all facts (from the individual and their spouse families) that contain NOTE sub-records.
     *
     * @return Collection<int,Fact>
     */
    public function getFactsWithNotes(Individual $individual): Collection
    {
        $facts = $individual->facts();

        foreach ($individual->spouseFamilies() as $family) {
            if ($family->canShow()) {
                foreach ($family->facts() as $fact) {
                    $facts->push($fact);
                }
            }
        }

        $callback = static fn (Fact $fact): bool => preg_match('/(?:^1|\n\d) NOTE/', $fact->gedcom()) === 1;

        $facts = $facts->filter($callback);

        return $this->fact_sort_service->sort($facts);
    }
}
