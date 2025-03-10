<?php declare(strict_types = 1);

$ignoreErrors = [];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method make\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Elements/AbstractXrefElement.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Elements\\\\AgeAtEvent\\:\\:value\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Elements/AgeAtEvent.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Elements\\\\DateValue\\:\\:escape\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Elements/DateValue.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Elements/PlaceHierarchy.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Elements\\\\RestrictionNotice\\:\\:canonical\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Elements/RestrictionNotice.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Encodings\\\\ANSEL\\:\\:fromUtf8\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Encodings/ANSEL.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Encodings/ANSEL.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function array_map expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Encodings/AbstractEncoding.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Fact\\:\\:value\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Fact.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of method Fisharebest\\\\Webtrees\\\\Contracts\\\\ElementInterface\\:\\:canonical\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Fact.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Family but returns Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/FamilyFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\FamilyFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/FamilyFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/FamilyFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\GedcomRecord but returns Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/GedcomRecordFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\GedcomRecordFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/GedcomRecordFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Header but returns Fisharebest\\\\Webtrees\\\\Header\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/HeaderFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\HeaderFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/HeaderFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function dechex expects int, float\\|int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/IdFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Individual but returns Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/IndividualFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\IndividualFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/IndividualFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Location but returns Fisharebest\\\\Webtrees\\\\Location\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/LocationFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\LocationFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/LocationFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Media but returns Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/MediaFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\MediaFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/MediaFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Note but returns Fisharebest\\\\Webtrees\\\\Note\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/NoteFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\NoteFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/NoteFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\RepositoryFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/RepositoryFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\SharedNote but returns Fisharebest\\\\Webtrees\\\\SharedNote\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SharedNoteFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\SharedNoteFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SharedNoteFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SlugFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Source but returns Fisharebest\\\\Webtrees\\\\Source\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SourceFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\SourceFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SourceFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Submission but returns Fisharebest\\\\Webtrees\\\\Submission\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SubmissionFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\SubmissionFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SubmissionFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Submitter but returns Fisharebest\\\\Webtrees\\\\Submitter\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SubmitterFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Factories\\\\SubmitterFactory\\:\\:gedcom\\(\\) should return string\\|null but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/SubmitterFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Factories/XrefFactory.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Family\\:\\:spouses\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> but returns Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Family.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fromUtf8\\(\\) on Fisharebest\\\\Webtrees\\\\Encodings\\\\EncodingInterface\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/GedcomFilters/GedcomEncodingFilter.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_shift expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/GedcomRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/GedcomRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$gedcom of method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:updateFact\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/GedcomRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/GedcomRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:\\$getAllNames \\(array\\<array\\<string\\>\\>\\) does not accept array\\<array\\<string\\|null\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/GedcomRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'\\-dev\' and \'\' will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Helpers/functions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$host of method Psr\\\\Http\\\\Message\\\\UriInterface\\:\\:withHost\\(\\) expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/BaseUrl.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$path of method Psr\\\\Http\\\\Message\\\\UriInterface\\:\\:withPath\\(\\) expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/BaseUrl.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$port of method Psr\\\\Http\\\\Message\\\\UriInterface\\:\\:withPort\\(\\) expects int\\|null, int\\<0, 65535\\>\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/BaseUrl.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$scheme of method Psr\\\\Http\\\\Message\\\\UriInterface\\:\\:withScheme\\(\\) expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/BaseUrl.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/ClientIp.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method has\\(\\) on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method instance\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method withAttribute\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$message of static method Fisharebest\\\\Webtrees\\\\Log\\:\\:addErrorLog\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$request of method Fisharebest\\\\Webtrees\\\\Http\\\\Middleware\\\\HandleExceptions\\:\\:httpExceptionResponse\\(\\) expects Psr\\\\Http\\\\Message\\\\ServerRequestInterface, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$request of method Fisharebest\\\\Webtrees\\\\Http\\\\Middleware\\\\HandleExceptions\\:\\:thirdPartyExceptionResponse\\(\\) expects Psr\\\\Http\\\\Message\\\\ServerRequestInterface, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$request of method Fisharebest\\\\Webtrees\\\\Http\\\\Middleware\\\\HandleExceptions\\:\\:unhandledExceptionResponse\\(\\) expects Psr\\\\Http\\\\Message\\\\ServerRequestInterface, mixed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/Middleware/HandleExceptions.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method instance\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/LoadRoutes.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$basepath of class Aura\\\\Router\\\\RouterContainer constructor expects string\\|null, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/LoadRoutes.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method instance\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/NoRouteFound.php',
];
   $ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\|false supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/ReadConfigIni.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method instance\\(\\) on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/Middleware/Router.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method instance\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/UseTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Http\\\\Middleware\\\\UseTransaction\\:\\:process\\(\\) should return Psr\\\\Http\\\\Message\\\\ResponseInterface but returns Psr\\\\Http\\\\Message\\\\ResponseInterface\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/Middleware/UseTransaction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$content of function response expects array\\|object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/AppleTouchIconPng.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/AutoCompleteCitation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/AutoCompleteCitation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),Fisharebest\\\\Webtrees\\\\Individual\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Individual\\>\\|iterable\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Individual\\>, Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/AutoCompleteCitation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/CalendarEvents.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/CalendarEvents.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$content of function response expects array\\|object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/CalendarEvents.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/CheckTree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\ControlPanel\\:\\:totalChanges\\(\\) should return array\\<string\\> but returns array\\<int\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ControlPanel.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: int, Closure\\(string\\)\\: int given\\.$#',
	'count' => 8,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ControlPanel.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:pluck\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 8,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ControlPanel.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$collection of method Fisharebest\\\\Webtrees\\\\Services\\\\DatatablesService\\:\\:handleCollection\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, mixed\\>, Illuminate\\\\Support\\\\Collection\\<int, object\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/DataFixData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Module\\\\ModuleDataFixInterface\\>\\:\\:get\\(\\) expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/DataFixSelect.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on object\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/DataFixUpdateAll.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\DeleteRecord\\:\\:removeLinks\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/DeleteRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Http/RequestHandlers/DeleteRecord.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/DeleteUser.php',
];
   $ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/EditFactAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$gedcom of method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:updateFact\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/EditFactAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/EditMediaFileAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$gedcom of method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:updateRecord\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/EditNoteAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/EditRawFactAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/EditRawRecordAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$content of function response expects array\\|object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FaviconIco.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method displayImage\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FixLevel0MediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method facts\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FixLevel0MediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FixLevel0MediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FixLevel0MediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FixLevel0MediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/FixLevel0MediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\<int, string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/GedcomLoad.php',
];
   $ignoreErrors[] = [
	'message' => '#^Variable \\$progress on left side of \\?\\? always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/GedcomLoad.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method createFact\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method facts\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method firstImageFile\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method tree\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method updateRecord\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method xref\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$record of method Fisharebest\\\\Webtrees\\\\Services\\\\PendingChangesService\\:\\:acceptRecord\\(\\) expects Fisharebest\\\\Webtrees\\\\GedcomRecord, Fisharebest\\\\Webtrees\\\\Media\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$tree of method Fisharebest\\\\Webtrees\\\\Contracts\\\\MediaFactoryInterface\\:\\:make\\(\\) expects Fisharebest\\\\Webtrees\\\\Tree, Fisharebest\\\\Webtrees\\\\Tree\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on non\\-empty\\-array\\<int, string\\>\\|false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 2 on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Unable to resolve the template type TMakeKey in call to method static method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:make\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ImportThumbnailsData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset \'0\' on array\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ManageMediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset \'1\' on array\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ManageMediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:where\\(\\) expects array\\|Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ManageMediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strlen expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ManageMediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$collection of method Fisharebest\\\\Webtrees\\\\Services\\\\DatatablesService\\:\\:handleCollection\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, mixed\\>, Illuminate\\\\Support\\\\Collection\\<int, array\\{string\\}\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ManageMediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$needle of function str_starts_with expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ManageMediaData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataAdd.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataDelete.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportCSV.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$latitude on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportCSV.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$longitude on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportCSV.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$place on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportCSV.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportCSV.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$content of function response expects array\\|object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportCSV.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportGeoJson.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$latitude on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportGeoJson.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$longitude on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportGeoJson.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$place on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportGeoJson.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataExportGeoJson.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$features on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataImportAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function str_contains expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataImportAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$json of function json_decode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataImportAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MapDataList.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:pluck\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MergeFactsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$gedcom of method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:updateRecord\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MergeFactsAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on Fisharebest\\\\Webtrees\\\\Tree\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/MergeTreesAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function str_contains expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ModuleAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$module_name of method Fisharebest\\\\Webtrees\\\\Services\\\\ModuleService\\:\\:findByName\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ModuleAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$token of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:findByToken\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PasswordResetAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$token of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:findByToken\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PasswordResetPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$change_id of method Fisharebest\\\\Webtrees\\\\Services\\\\PendingChangesService\\:\\:acceptChange\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PendingChangesAcceptChange.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: string, Closure\\(object\\)\\: non\\-falsy\\-string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PendingChangesLogDownload.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of method Fisharebest\\\\Webtrees\\\\Contracts\\\\TimestampFactoryInterface\\:\\:fromString\\(\\) expects string\\|null, mixed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PendingChangesLogPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$change_id of method Fisharebest\\\\Webtrees\\\\Services\\\\PendingChangesService\\:\\:rejectChange\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PendingChangesRejectChange.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/PhpInformation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$content of function response expects array\\|object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ReportGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\<string\\>\\|string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/ReportSetupPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchGeneralPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchGeneralPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Location\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchGeneralPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Note\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchGeneralPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Source\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchGeneralPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match_all expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchGeneralPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$gedcom of method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:updateRecord\\(\\) expects string, string\\|null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replaceIndividualNames\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replacePlaces\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replacePlaces\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replaceRecords\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replaceRecords\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replaceRecords\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Note\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replaceRecords\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Repository\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$records of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SearchReplaceAction\\:\\:replaceRecords\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Source\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SearchReplaceAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method instance\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method isNotEmpty\\(\\) on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method withAttribute\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$code of static method Fisharebest\\\\Webtrees\\\\I18N\\:\\:init\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$driver of method Fisharebest\\\\Webtrees\\\\Services\\\\ServerCheckService\\:\\:serverErrors\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$driver of method Fisharebest\\\\Webtrees\\\\Services\\\\ServerCheckService\\:\\:serverWarnings\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$identifier of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:findByIdentifier\\(\\) expects string, mixed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$url of function redirect expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$user_name of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:create\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function e expects BackedEnum\\|Illuminate\\\\Contracts\\\\Support\\\\DeferringDisplayableValue\\|Illuminate\\\\Contracts\\\\Support\\\\Htmlable\\|string\\|null, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$wtname of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SetupWizard\\:\\:checkAdminUser\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$real_name of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:create\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$setting_value of method Fisharebest\\\\Webtrees\\\\User\\:\\:setPreference\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$wtuser of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SetupWizard\\:\\:checkAdminUser\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$email of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:create\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$wtpass of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SetupWizard\\:\\:checkAdminUser\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$password of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:create\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$wtemail of method Fisharebest\\\\Webtrees\\\\Http\\\\RequestHandlers\\\\SetupWizard\\:\\:checkAdminUser\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SetupWizard.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: string, Closure\\(object\\)\\: non\\-falsy\\-string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SiteLogsDownload.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of method Fisharebest\\\\Webtrees\\\\Contracts\\\\TimestampFactoryInterface\\:\\:fromString\\(\\) expects string\\|null, mixed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SiteLogsPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on Fisharebest\\\\Webtrees\\\\Tree\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/SynchronizeTrees.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/TreePageBlock.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/TreePreferencesAction.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/TreePrivacyPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$l_from on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UnconnectedPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$l_to on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UnconnectedPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UnconnectedPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:mapWithKeys\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: array\\<string, array\\{\\}\\>, Closure\\(string\\)\\: non\\-empty\\-array\\<string, array\\{\\}\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UnconnectedPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function usort expects callable\\(array\\<Fisharebest\\\\Webtrees\\\\Individual\\>\\|Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Individual\\>, array\\<Fisharebest\\\\Webtrees\\\\Individual\\>\\|Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Individual\\>\\)\\: int, Closure\\(Illuminate\\\\Support\\\\Collection, Illuminate\\\\Support\\\\Collection\\)\\: int\\<\\-1, 1\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UnconnectedPage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Unable to resolve the template type TGetDefault in call to method Illuminate\\\\Support\\\\Collection\\<string,string\\>\\:\\:get\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UserListData.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/UserPageBlock.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$user_name of method Fisharebest\\\\Webtrees\\\\Services\\\\UserService\\:\\:findByUserName\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Http/RequestHandlers/VerifyEmail.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method findByInterface\\(\\) on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/I18N.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "\\*" between string and 365 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and array\\<int, string\\>\\|string results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method spouseFamilies\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function strpos expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match_all expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Individual.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method has\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Log.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$xref of method Fisharebest\\\\Webtrees\\\\Contracts\\\\GedcomRecordFactoryInterface\\:\\:make\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Media.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$access_level on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/AbstractModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\AbstractModule\\:\\:getBlockSetting\\(\\) should return string but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/AbstractModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\AbstractModule\\:\\:getPreference\\(\\) should return string but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/AbstractModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:first\\(\\) expects \\(callable\\(mixed, \\(int\\|string\\)\\)\\: bool\\)\\|null, Closure\\(object\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/AbstractModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/BranchesListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method object\\:\\:censusLanguage\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method updateFact\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Empty array passed to foreach\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$census of method Fisharebest\\\\Webtrees\\\\Module\\\\CensusAssistantModule\\:\\:censusTableEmptyRow\\(\\) expects Fisharebest\\\\Webtrees\\\\Census\\\\CensusInterface, object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$census of method Fisharebest\\\\Webtrees\\\\Module\\\\CensusAssistantModule\\:\\:censusTableHeader\\(\\) expects Fisharebest\\\\Webtrees\\\\Census\\\\CensusInterface, object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$census of method Fisharebest\\\\Webtrees\\\\Module\\\\CensusAssistantModule\\:\\:censusTableRow\\(\\) expects Fisharebest\\\\Webtrees\\\\Census\\\\CensusInterface, object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$census of method Fisharebest\\\\Webtrees\\\\Module\\\\CensusAssistantModule\\:\\:createNoteText\\(\\) expects Fisharebest\\\\Webtrees\\\\Census\\\\CensusInterface, object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$ca_individuals of method Fisharebest\\\\Webtrees\\\\Module\\\\CensusAssistantModule\\:\\:createNoteText\\(\\) expects array\\<array\\<string\\>\\>, array\\<string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CensusAssistantModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CloudsTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/CloudsTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FabTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FabTheme\\:\\:genealogyMenu\\(\\) should return array\\<Fisharebest\\\\Webtrees\\\\Menu\\> but returns array\\<int, Fisharebest\\\\Webtrees\\\\Menu\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FabTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FabTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FamilyTreeFavoritesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FamilyTreeNewsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_surn on mixed\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/app/Module/FamilyTreeStatisticsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_surname on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/FamilyTreeStatisticsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$total on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FamilyTreeStatisticsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method embedTags\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FamilyTreeStatisticsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on array\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 4 on array\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method alternateName\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method lifespan\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method sex\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method xref\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FanChartModule\\:\\:imageColor\\(\\) should return int but returns int\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagecolorallocate expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagecolortransparent expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagedestroy expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagefilledarc expects GdImage, GdImage\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagefilledrectangle expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagepng expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagettftext expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of method Fisharebest\\\\Webtrees\\\\Module\\\\FanChartModule\\:\\:imageColor\\(\\) expects GdImage, GdImage\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$individual of method Fisharebest\\\\Webtrees\\\\Module\\\\FanChartModule\\:\\:chartTitle\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Individual\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$individual of method Fisharebest\\\\Webtrees\\\\Module\\\\ModuleThemeInterface\\:\\:individualBoxMenu\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Individual\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$color of function imagecolortransparent expects int\\|null, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$color of function imagefilledrectangle expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Unsafe access to private constant Fisharebest\\\\Webtrees\\\\Module\\\\FanChartModule\\:\\:FONT through static\\:\\:\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FanChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixCemeteryTag\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixCemeteryTag.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixDuplicateLinks\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixDuplicateLinks.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixDuplicateLinks\\:\\:updateGedcom\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixDuplicateLinks.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/FixDuplicateLinks.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixMissingDeaths\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixMissingDeaths.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixNameSlashesAndSpaces\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixNameSlashesAndSpaces.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixNameSlashesAndSpaces\\:\\:updateGedcom\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixNameSlashesAndSpaces.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixNameSlashesAndSpaces.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixNameTags\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixNameTags.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixPlaceNames\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixPlaceNames.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixPlaceNames\\:\\:updateGedcom\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixPlaceNames.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixPrimaryTag\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixPrimaryTag.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixSearchAndReplace\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixSearchAndReplace.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixSearchAndReplace\\:\\:updateGedcom\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixSearchAndReplace.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\FixWtObjeSortTag\\:\\:mergePendingRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, object\\> but returns Illuminate\\\\Support\\\\Collection\\<int, stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FixWtObjeSortTag.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/FrequentlyAskedQuestionsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:filter\\(\\) expects \\(callable\\(mixed, \\(int\\|string\\)\\)\\: bool\\)\\|null, Closure\\(object\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FrequentlyAskedQuestionsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/FrequentlyAskedQuestionsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$geonames on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/GeonamesAutocomplete.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/HitCountFooterModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method embedTags\\(\\) on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/HtmlBlockModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<int,string\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, string\\>\\|iterable\\<int, string\\>, Illuminate\\\\Support\\\\Collection\\<int, mixed\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/IndividualFactsTabModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$count on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_givn on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_surn on mixed\\.$#',
	'count' => 8,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_surname on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$total on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:whereIn\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/IndividualListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method xref\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/InteractiveTree/TreeView.php',
];
   $ignoreErrors[] = [
	'message' => '#^Offset 1 on array\\{Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Family\\} in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/InteractiveTree/TreeView.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$familyList of method Fisharebest\\\\Webtrees\\\\Module\\\\InteractiveTree\\\\TreeView\\:\\:drawChildren\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\|null\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/InteractiveTree/TreeView.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageAfrikaans.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageAlbanian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageArabic.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageBosnian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageBulgarian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageCatalan.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageChineseSimplified.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageChineseTraditional.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageCroatian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageCzech.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageDanish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageDivehi.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageDutch.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageEnglishUnitedStates.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageEstonian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageFaroese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageFarsi.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageFinnish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageFrench.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageGalician.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageGeorgian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageGerman.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageGreek.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageHebrew.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageHindi.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageHungarian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageIcelandic.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageIndonesian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageItalian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageJapanese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageJavanese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageKazhak.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageKorean.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageKurdish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageLatvian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageLingala.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageLithuanian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageMalay.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageMaori.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageMarathi.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageNepalese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageNorwegianBokmal.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageNorwegianNynorsk.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageOccitan.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguagePolish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguagePortuguese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguagePortugueseBrazil.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageRomanian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageRussian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSerbian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSerbianLatin.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSlovakian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSlovenian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSpanish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSundanese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSwahili.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageSwedish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageTagalog.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageTamil.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageTatar.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageThai.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageTurkish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageUkranian.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageUrdu.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageVietnamese.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageWelsh.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LanguageYiddish.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\LifespansChartModule\\:\\:findIndividualsByDate\\(\\) should return array\\<string\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LifespansChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\LifespansChartModule\\:\\:findIndividualsByPlace\\(\\) should return array\\<string\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LifespansChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Menu\\|null\\>\\:\\:sort\\(\\) expects \\(callable\\(Fisharebest\\\\Webtrees\\\\Menu\\|null, Fisharebest\\\\Webtrees\\\\Menu\\|null\\)\\: int\\)\\|int\\|null, Closure\\(Fisharebest\\\\Webtrees\\\\Menu, Fisharebest\\\\Webtrees\\\\Menu\\)\\: int\\<\\-1, 1\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ListsMenuModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$submenus of class Fisharebest\\\\Webtrees\\\\Menu constructor expects array\\<Fisharebest\\\\Webtrees\\\\Menu\\>, array\\<int, Fisharebest\\\\Webtrees\\\\Menu\\|null\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ListsMenuModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Location, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Location given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/LocationListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\MapGeoLocationGeonames\\:\\:extractLocationsFromResponse\\(\\) should return array\\<string\\> but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MapGeoLocationGeonames.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\MapGeoLocationNominatim\\:\\:extractLocationsFromResponse\\(\\) should return array\\<string\\> but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MapGeoLocationNominatim.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\MapGeoLocationOpenRouteService\\:\\:extractLocationsFromResponse\\(\\) should return array\\<string\\> but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MapGeoLocationOpenRouteService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Media, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Media given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MediaListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: string, Closure\\(string\\)\\: string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MediaListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MinimalTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\MinimalTheme\\:\\:genealogyMenu\\(\\) should return array\\<Fisharebest\\\\Webtrees\\\\Menu\\> but returns array\\<int, Fisharebest\\\\Webtrees\\\\Menu\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MinimalTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/MinimalTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Note, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Note given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/NoteListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$features on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/OpenRouteServiceAutocomplete.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$individual of method Fisharebest\\\\Webtrees\\\\Module\\\\PedigreeChartModule\\:\\:nextLink\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Individual\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/PedigreeChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$length of function array_chunk expects int\\<1, max\\>, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/PlaceHierarchyListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RecentChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RecentChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RecentChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),Fisharebest\\\\Webtrees\\\\Individual\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Individual\\>\\|iterable\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Individual\\>, Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RecentChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\GedcomRecord but returns Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\GedcomRecord but returns Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$l_from on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$l_to on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method gedcom\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method sex\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method xref\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\RelationshipsChartModule\\:\\:allAncestors\\(\\) should return array\\<string\\> but returns array\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\RelationshipsChartModule\\:\\:excludeFamilies\\(\\) should return array\\<string\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$content of function response expects array\\|object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$nodes of method Fisharebest\\\\Webtrees\\\\Services\\\\RelationshipService\\:\\:nameFromPath\\(\\) expects array\\<Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual\\>, array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RelationshipsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Repository, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Repository given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/RepositoryListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ResearchTaskModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ResearchTaskModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Individual\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, Fisharebest\\\\Webtrees\\\\Individual\\>\\|iterable\\<int, Fisharebest\\\\Webtrees\\\\Individual\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ResearchTaskModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$new_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ReviewChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$old_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ReviewChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ReviewChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method canShow\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ReviewChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ReviewChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ReviewChangesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Node\\:\\:add\\(\\)\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/ShareAnniversaryModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,mixed\\>\\:\\:filter\\(\\) expects \\(callable\\(mixed, int\\)\\: bool\\)\\|null, Closure\\(Fisharebest\\\\Webtrees\\\\Fact\\)\\: bool given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Module/ShareAnniversaryModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,mixed\\>\\:\\:mapWithKeys\\(\\) expects callable\\(mixed, int\\)\\: array\\<string, string\\>, Closure\\(Fisharebest\\\\Webtrees\\\\Fact\\)\\: non\\-empty\\-array\\<string, non\\-falsy\\-string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ShareAnniversaryModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Fact\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, Fisharebest\\\\Webtrees\\\\Fact\\>\\|iterable\\<int, Fisharebest\\\\Webtrees\\\\Fact\\>, Illuminate\\\\Support\\\\Collection\\<int, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Fact\\>\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/ShareAnniversaryModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\SiteMapModule\\:\\:sitemapRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\GedcomRecord\\> but returns Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\>\\|Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\>\\|Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Media\\>\\|Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Note\\>\\|Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Repository\\>\\|Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Source\\>\\|Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Submitter\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Media, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Media given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Note, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Note given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Repository, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Repository given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Source, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Source given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Submitter, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Submitter given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SiteMapModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$m_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SlideShowModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$m_id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SlideShowModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:first\\(\\) expects \\(callable\\(mixed, \\(int\\|string\\)\\)\\: bool\\)\\|null, Closure\\(object\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SlideShowModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$request of static method Fisharebest\\\\Webtrees\\\\Validator\\:\\:queryParams\\(\\) expects Psr\\\\Http\\\\Message\\\\ServerRequestInterface, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SlideShowModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Source, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Source given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SourceListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "\\+" between int and int\\|string results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between string and 1 results in an error\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "/" between stdClass and 365\\.25 results in an error\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$d_month on mixed\\.$#',
	'count' => 11,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$f_husb on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$f_wife on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$i_sex on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$month on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$total on mixed\\.$#',
	'count' => 11,
	'path' => __DIR__ . '/app/Module/StatisticsChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$block_id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$individual on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$languages on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$title on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/StoriesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Submitter, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Submitter given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/SubmitterListModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method xref\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Module/TimelineChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),Fisharebest\\\\Webtrees\\\\Individual\\|null\\>\\:\\:filter\\(\\) expects \\(callable\\(Fisharebest\\\\Webtrees\\\\Individual\\|null, \\(int\\|string\\)\\)\\: bool\\)\\|null, Closure\\(Fisharebest\\\\Webtrees\\\\GedcomRecord\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TimelineChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),Fisharebest\\\\Webtrees\\\\Individual\\|null\\>\\:\\:filter\\(\\) expects \\(callable\\(Fisharebest\\\\Webtrees\\\\Individual\\|null, \\(int\\|string\\)\\)\\: bool\\)\\|null, Closure\\(Fisharebest\\\\Webtrees\\\\Individual\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TimelineChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),Fisharebest\\\\Webtrees\\\\Individual\\|null\\>\\:\\:map\\(\\) expects callable\\(Fisharebest\\\\Webtrees\\\\Individual\\|null, \\(int\\|string\\)\\)\\: string, Closure\\(Fisharebest\\\\Webtrees\\\\Individual\\)\\: string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TimelineChartModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method commonGivenFemaleListTotals\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopGivenNamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method commonGivenFemaleTable\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopGivenNamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method commonGivenMaleListTotals\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopGivenNamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method commonGivenMaleTable\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopGivenNamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$page_count on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopPageViewsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$page_parameter on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopPageViewsModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_surn on mixed\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/app/Module/TopSurnamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$n_surname on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Module/TopSurnamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$total on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/TopSurnamesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/UserFavoritesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/UserJournalModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/UserMessagesModule.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/WebtreesTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\WebtreesTheme\\:\\:genealogyMenu\\(\\) should return array\\<Fisharebest\\\\Webtrees\\\\Menu\\> but returns array\\<int, Fisharebest\\\\Webtrees\\\\Menu\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/WebtreesTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/WebtreesTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method name\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/XeneaTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Module\\\\XeneaTheme\\:\\:genealogyMenu\\(\\) should return array\\<Fisharebest\\\\Webtrees\\\\Menu\\> but returns array\\<int, Fisharebest\\\\Webtrees\\\\Menu\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/XeneaTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Module/XeneaTheme.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Note\\:\\:getNote\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Note.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$xref of method Fisharebest\\\\Webtrees\\\\Contracts\\\\GedcomRecordFactoryInterface\\:\\:make\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Note.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method findByComponent\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Place, Closure\\(string\\)\\: Fisharebest\\\\Webtrees\\\\Place given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:sort\\(\\) expects \\(callable\\(mixed, mixed\\)\\: int\\)\\|int\\|null, Closure\\(string, string\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of class Illuminate\\\\Support\\\\Collection constructor expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, string\\>\\|iterable\\<int, string\\>\\|null, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function mb_substr expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$text of static method Fisharebest\\\\Webtrees\\\\Soundex\\:\\:daitchMokotoff\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$text of static method Fisharebest\\\\Webtrees\\\\Soundex\\:\\:russell\\(\\) expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Place.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$latitude on object\\|null\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$longitude on object\\|null\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\PlaceLocation\\:\\:boundingRectangle\\(\\) should return array\\<array\\<float\\>\\> but returns array\\<int, array\\<int, mixed\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\PlaceLocation\\:\\:details\\(\\) should return object but returns object\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: float, Closure\\(string\\)\\: float given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of class Illuminate\\\\Support\\\\Collection constructor expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, string\\>\\|iterable\\<int, string\\>\\|null, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function mb_substr expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/PlaceLocation.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "/" between string and 2 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/HtmlRenderer.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\PdfRenderer\\:\\:getStyle\\(\\) should return array\\<string, string\\> but returns array\\<string, string\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/PdfRenderer.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fm of method TCPDF\\:\\:setFooterMargin\\(\\) expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/PdfRenderer.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$hm of method TCPDF\\:\\:setHeaderMargin\\(\\) expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/PdfRenderer.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$size of method TCPDF\\:\\:setFont\\(\\) expects float\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/PdfRenderer.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\:\\:\\$styles \\(array\\<array\\<string, string\\>\\>\\) does not accept array\\<array\\<string, string\\>\\|string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/PdfRenderer.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$x of method Fisharebest\\\\Webtrees\\\\Report\\\\HtmlRenderer\\:\\:setX\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportHtmlCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$y of method Fisharebest\\\\Webtrees\\\\Report\\\\HtmlRenderer\\:\\:setY\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportHtmlCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$y of method Fisharebest\\\\Webtrees\\\\Report\\\\HtmlRenderer\\:\\:setXy\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportHtmlCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\(mixed\\) of echo cannot be converted to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportHtmlCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\(mixed\\) of echo cannot be converted to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportHtmlCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "\\*" between string and 0\\|int\\<2, max\\> results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportHtmlText.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserBase.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function feof expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserBase.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserBase.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$value of function xml_parser_set_option expects int\\|string, false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserBase.php',
];
   $ignoreErrors[] = [
	'message' => '#^Access to an undefined property Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\:\\:\\$generation\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Access to private property Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\:\\:\\$generation\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Binary operation "\\+" between non\\-empty\\-string and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\:\\:canShow\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\:\\:privatizeGedcom\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\:\\:tree\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to function assert\\(\\) with false and LogicException will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on array\\|false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on array\\|false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset float\\|int on array\\<int, string\\>\\|false\\.$#',
	'count' => 13,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset float\\|int\\<1, max\\> on array\\<int, string\\>\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$gedcom on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method addElement\\(\\) on Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method childFamilies\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method facts\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method findHighlightedMediaFile\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method firstImageFile\\(\\) on Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method privatizeGedcom\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method xref\\(\\) on Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on array\\<int, array\\<string\\>\\|int\\>\\|null\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Instanceof between Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer and Fisharebest\\\\Webtrees\\\\Report\\\\ReportBaseElement will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:substituteVars\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function end expects array\\|object, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$expression of method Symfony\\\\Component\\\\ExpressionLanguage\\\\ExpressionLanguage\\:\\:evaluate\\(\\) expects string\\|Symfony\\\\Component\\\\ExpressionLanguage\\\\Expression, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function str_contains expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagesx expects GdImage, GdImage\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagesy expects GdImage, GdImage\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function addslashes expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$style of method Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\:\\:addStyle\\(\\) expects array\\<string\\>, array\\<string, float\\|string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function uasort expects callable\\(Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null, Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\)\\: int, Closure\\(Fisharebest\\\\Webtrees\\\\Family, Fisharebest\\\\Webtrees\\\\Family\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function uasort expects callable\\(Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null, Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\)\\: int, Closure\\(Fisharebest\\\\Webtrees\\\\GedcomRecord, Fisharebest\\\\Webtrees\\\\GedcomRecord\\)\\: int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function uasort expects callable\\(Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null, Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\)\\: int, Closure\\(Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Individual\\)\\: int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function uasort expects callable\\(Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\), Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\)\\: int, Closure\\(Fisharebest\\\\Webtrees\\\\GedcomRecord, Fisharebest\\\\Webtrees\\\\GedcomRecord\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function uasort expects callable\\(Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\), Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\)\\: int, Closure\\(Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Individual\\)\\: int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match expects string, string\\|null given\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$value of function xml_parser_set_option expects int\\|string, false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$current_element \\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportBaseElement\\) does not accept Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$gedrec_stack \\(array\\<string\\>\\) does not accept array\\<array\\<int, string\\>\\|string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$list \\(array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\>\\) does not accept array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$list \\(array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\>\\) does not accept array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\|null\\>\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$list \\(array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\>\\) does not accept array\\<stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$list \\(array\\<Fisharebest\\\\Webtrees\\\\GedcomRecord\\|static\\(Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\)\\>\\) does not accept array\\<string, Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$parser \\(XMLParser\\) does not accept XMLParser\\|null\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$print_data \\(bool\\) does not accept bool\\|null\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$repeat_bytes \\(int\\) does not accept array\\<string\\>\\|int\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$repeats \\(array\\<string\\>\\) does not accept array\\<string\\>\\|int\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$vars \\(array\\<array\\<string\\>\\>\\) does not accept array\\<array\\<string\\|null\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$wt_report \\(Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\) does not accept Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Report\\\\ReportParserGenerate\\:\\:\\$wt_report \\(Fisharebest\\\\Webtrees\\\\Report\\\\AbstractRenderer\\) does not accept Fisharebest\\\\Webtrees\\\\Report\\\\ReportBaseTextbox\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserGenerate.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot assign new offset to array\\<string\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserSetup.php',
];
   $ignoreErrors[] = [
	'message' => '#^array\\<string\\>\\|string does not accept array\\<string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportParserSetup.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$x of method Fisharebest\\\\Webtrees\\\\Report\\\\PdfRenderer\\:\\:addMarginX\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$y of method TCPDF\\:\\:setY\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$y of method TCPDF\\:\\:Link\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$fill of method TCPDF\\:\\:MultiCell\\(\\) expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#9 \\$y of method TCPDF\\:\\:MultiCell\\(\\) expects float\\|null, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfCell.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\ReportPdfFootnote\\:\\:getWidth\\(\\) should return array\\{float, int, float\\} but returns array\\{0\\|array\\<float\\>\\|float, 1, int\\<0, max\\>\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfFootnote.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$link of method TCPDF\\:\\:setLink\\(\\) expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfFootnote.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function ceil expects float\\|int, array\\<float\\>\\|float given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Report/ReportPdfFootnote.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\ReportPdfText\\:\\:getWidth\\(\\) should return array\\{float, int, float\\} but returns array\\{array\\<float\\>\\|float, 0\\|2, int\\<0, max\\>\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfText.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\ReportPdfText\\:\\:getWidth\\(\\) should return array\\{float, int, float\\} but returns array\\{array\\<float\\>\\|float\\|int, 1, int\\<0, max\\>\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfText.php',
];
   $ignoreErrors[] = [
	'message' => '#^Instanceof between Fisharebest\\\\Webtrees\\\\Report\\\\ReportBaseElement and Fisharebest\\\\Webtrees\\\\Report\\\\ReportPdfFootnote will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/ReportPdfTextBox.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\RightToLeftSupport\\:\\:spanLtrRtl\\(\\) should return string but returns array\\<int, string\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/RightToLeftSupport.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Report\\\\RightToLeftSupport\\:\\:starredName\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/RightToLeftSupport.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/RightToLeftSupport.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/RightToLeftSupport.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/RightToLeftSupport.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/RightToLeftSupport.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$h of method TCPDF\\:\\:checkPageBreak\\(\\) expects float, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/TcpdfWrapper.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$y of method TCPDF\\:\\:checkPageBreak\\(\\) expects float\\|null, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Report/TcpdfWrapper.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$access_level on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Schema/Migration42.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$component on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Schema/Migration42.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$gedcom_id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Schema/Migration42.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$module_name on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Schema/Migration42.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:having\\(\\) expects Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Schema/Migration44.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Family but returns Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Individual but returns Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Media but returns Fisharebest\\\\Webtrees\\\\Media\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Anonymous function should return Fisharebest\\\\Webtrees\\\\Source but returns Fisharebest\\\\Webtrees\\\\Source\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined static method Illuminate\\\\Database\\\\Capsule\\\\Manager\\:\\:query\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\AdminService\\:\\:gedcomFiles\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, string\\> but returns Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Family\\>, Closure\\(string\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Individual\\>, Closure\\(string\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Media\\>, Closure\\(string\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Media\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Source\\>, Closure\\(string\\)\\: non\\-empty\\-array\\<int, Fisharebest\\\\Webtrees\\\\Source\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:having\\(\\) expects Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$table of static method Illuminate\\\\Database\\\\Capsule\\\\Manager\\:\\:table\\(\\) expects Closure\\|Illuminate\\\\Database\\\\Query\\\\Builder\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/AdminService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$d_day on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$d_fact on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$d_month on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$d_type on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$d_year on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$gedcom on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/CalendarService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\ChartService\\:\\:descendants\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> but returns Illuminate\\\\Support\\\\Collection\\<string, Fisharebest\\\\Webtrees\\\\Individual\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ChartService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<string,Fisharebest\\\\Webtrees\\\\Individual\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<string, Fisharebest\\\\Webtrees\\\\Individual\\>\\|iterable\\<string, Fisharebest\\\\Webtrees\\\\Individual\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ChartService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/ClipboardService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, int\\)\\: Fisharebest\\\\Webtrees\\\\Fact, Closure\\(string\\)\\: Fisharebest\\\\Webtrees\\\\Fact given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ClipboardService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$gedcom of method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:createFact\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ClipboardService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Offset \'column\' does not exist on string\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Services/DatatablesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Offset \'dir\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/DatatablesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,mixed\\>\\:\\:filter\\(\\) expects \\(callable\\(mixed, int\\)\\: bool\\)\\|null, Closure\\(array\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/DatatablesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,mixed\\>\\:\\:sort\\(\\) expects \\(callable\\(mixed, mixed\\)\\: int\\)\\|int\\|null, Closure\\(array, array\\)\\: \\-1\\|0\\|1 given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/DatatablesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\GedcomEditService\\:\\:insertMissingRecordSubtags\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/GedcomEditService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_shift expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomEditService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$gedcom of method Fisharebest\\\\Webtrees\\\\Services\\\\GedcomEditService\\:\\:insertMissingLevels\\(\\) expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/GedcomEditService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$f_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$i_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$m_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$o_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$s_gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\GedcomExportService\\:\\:downloadResponse\\(\\) has parameter \\$records with generic class Illuminate\\\\Support\\\\Collection but does not specify its types\\: TKey, TValue$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\GedcomRecord, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\GedcomRecord given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Media, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Media given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Source, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Source given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function stream_get_meta_data expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomExportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\GedcomImportService\\:\\:createMediaObject\\(\\) should return string but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function str_starts_with expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtr expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match_all expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 10,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/GedcomImportService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\HomePageService\\:\\:filterActiveBlocks\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleBlockInterface\\> but returns Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleBlockInterface\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/HomePageService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of method Illuminate\\\\Support\\\\Collection\\<int,string\\>\\:\\:contains\\(\\) expects \\(callable\\(string, int\\)\\: bool\\)\\|string, mixed given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/HomePageService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$active_blocks of method Fisharebest\\\\Webtrees\\\\Services\\\\HomePageService\\:\\:filterActiveBlocks\\(\\) expects Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleBlockInterface\\>, Illuminate\\\\Support\\\\Collection\\<string, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleBlockInterface\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/HomePageService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$path of method Fisharebest\\\\Webtrees\\\\Services\\\\HousekeepingService\\:\\:deleteFileOrFolder\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/HousekeepingService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\GedcomRecord\\:\\:sex\\(\\)\\.$#',
	'count' => 17,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Illuminate\\\\Support\\\\Collection\\<\\*NEVER\\*, \\*NEVER\\*\\> does not accept Fisharebest\\\\Webtrees\\\\Fact\\.$#',
	'count' => 31,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Instanceof between Fisharebest\\\\Webtrees\\\\Individual and Fisharebest\\\\Webtrees\\\\Family will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\IndividualFactsService\\:\\:familyFacts\\(\\) return type with generic class Illuminate\\\\Support\\\\Collection does not specify its types\\: TKey, TValue$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\IndividualFactsService\\:\\:familyFacts\\(\\) should return Illuminate\\\\Support\\\\Collection&iterable\\<Fisharebest\\\\Webtrees\\\\Fact\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\IndividualFactsService\\:\\:historicFacts\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Fact\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\IndividualFactsService\\:\\:individualFacts\\(\\) return type with generic class Illuminate\\\\Support\\\\Collection does not specify its types\\: TKey, TValue$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,mixed\\>\\:\\:filter\\(\\) expects \\(callable\\(mixed, int\\)\\: bool\\)\\|null, Closure\\(Fisharebest\\\\Webtrees\\\\Fact\\)\\: bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$gedcom of class Fisharebest\\\\Webtrees\\\\Fact constructor expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Fact\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, Fisharebest\\\\Webtrees\\\\Fact\\>\\|iterable\\<int, Fisharebest\\\\Webtrees\\\\Fact\\>, Illuminate\\\\Support\\\\Collection\\<int, mixed\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Individual\\>\\:\\:merge\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, Fisharebest\\\\Webtrees\\\\Individual\\>\\|iterable\\<int, Fisharebest\\\\Webtrees\\\\Individual\\>, Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$spouse of method Fisharebest\\\\Webtrees\\\\Services\\\\IndividualFactsService\\:\\:spouseFacts\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Individual\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/IndividualFactsService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\LinkedRecordService\\:\\:allLinkedRecords\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\> but returns Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null, Closure\\(string\\)\\: Fisharebest\\\\Webtrees\\\\GedcomRecord\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Location, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Location given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Media, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Media given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Note, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Note given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Repository, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Repository given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Source, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Source given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/LinkedRecordService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$id on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$p_place on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$place on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\MapDataService\\:\\:activePlaces\\(\\) should return array\\<string, array\\<object\\>\\> but returns array\\<string, array\\<int, mixed\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\MapDataService\\:\\:placeIdsForLocation\\(\\) should return array\\<string\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: int, Closure\\(object\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: object, Closure\\(object\\)\\: object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: string, Closure\\(object\\)\\: string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/MapDataService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to function is_float\\(\\) with int will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\MediaFileService\\:\\:allFilesOnDisk\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, string\\> but returns Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\MediaFileService\\:\\:mediaFolders\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, string\\> but returns Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: string, Closure\\(string\\)\\: non\\-falsy\\-string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:mapWithKeys\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: array\\<string, string\\>, Closure\\(string\\)\\: non\\-empty\\-array\\<string, string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:sort\\(\\) expects \\(callable\\(mixed, mixed\\)\\: int\\)\\|int\\|null, Closure\\(string, string\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:pluck\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:where\\(\\) expects array\\|Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$location of method League\\\\Flysystem\\\\FilesystemReader\\:\\:listContents\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/MediaFileService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\ModuleService\\:\\:coreModules\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleInterface\\> but returns Illuminate\\\\Support\\\\Collection\\<string, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleInterface\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\ModuleService\\:\\:customModules\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\> but returns Illuminate\\\\Support\\\\Collection\\<string, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\ModuleService\\:\\:setupLanguages\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleLanguageInterface\\> but returns Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleInterface\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:mapWithKeys\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: array\\<int\\|string, object\\>, Closure\\(object\\)\\: non\\-empty\\-array\\<int\\|string, object\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\|null\\>\\:\\:mapWithKeys\\(\\) expects callable\\(Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\|null, int\\)\\: array\\<string, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\>, Closure\\(Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\)\\: non\\-empty\\-array\\<string, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleCustomInterface\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<int,Fisharebest\\\\Webtrees\\\\Module\\\\ModuleInterface\\>\\:\\:sort\\(\\) expects \\(callable\\(Fisharebest\\\\Webtrees\\\\Module\\\\ModuleInterface, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleInterface\\)\\: int\\)\\|int\\|null, Closure\\(Fisharebest\\\\Webtrees\\\\Module\\\\ModuleLanguageInterface, Fisharebest\\\\Webtrees\\\\Module\\\\ModuleLanguageInterface\\)\\: int\\<\\-1, 1\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$items of static method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:make\\(\\) expects Illuminate\\\\Contracts\\\\Support\\\\Arrayable\\<int, string\\>\\|iterable\\<int, string\\>\\|null, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ModuleService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$change_id on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$change_time on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$new_gedcom on mixed\\.$#',
	'count' => 8,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$old_gedcom on mixed\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$record on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\PendingChangesService\\:\\:pendingChanges\\(\\) should return array\\<array\\<object\\>\\> but returns array\\<int\\|string, array\\<int, mixed\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/PendingChangesService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual\\:\\:childFamilies\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual\\:\\:sex\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Call to an undefined method Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual\\:\\:spouseFamilies\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method findByInterface\\(\\) on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\RelationshipService\\:\\:matchRelationships\\(\\) should return array\\<Fisharebest\\\\Webtrees\\\\Relationship\\> but returns array\\<array\\<string\\>\\|Fisharebest\\\\Webtrees\\\\Relationship\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$individual of method Fisharebest\\\\Webtrees\\\\Services\\\\RelationshipService\\:\\:reflexivePronoun\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual, Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function array_reduce expects callable\\(array\\{string, string\\}, Fisharebest\\\\Webtrees\\\\Relationship\\)\\: array\\{string, string\\}, Closure\\(array, array\\)\\: array\\{string, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$person1 of method Fisharebest\\\\Webtrees\\\\Services\\\\RelationshipService\\:\\:legacyNameAlgorithm\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual\\|null, Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$person2 of method Fisharebest\\\\Webtrees\\\\Services\\\\RelationshipService\\:\\:legacyNameAlgorithm\\(\\) expects Fisharebest\\\\Webtrees\\\\Individual\\|null, Fisharebest\\\\Webtrees\\\\Family\\|Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/RelationshipService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchFamilyNames\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Family\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchIndividualNames\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Individual\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchLocations\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Location\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchMedia\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Media\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchNotes\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Note\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchPlaces\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Place\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchRepositories\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Repository\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchSharedNotes\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\SharedNote\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchSources\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Source\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchSourcesByName\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Source\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchSubmissions\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Submission\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\SearchService\\:\\:searchSubmitters\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, Fisharebest\\\\Webtrees\\\\Submitter\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Media, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Media given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:orWhere\\(\\) expects array\\|Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:where\\(\\) expects array\\|Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function mb_stripos expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/SearchService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\ServerCheckService\\:\\:serverErrors\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, string\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ServerCheckService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\ServerCheckService\\:\\:serverWarnings\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, string\\> but returns Illuminate\\\\Support\\\\Collection\\<int, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ServerCheckService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function e expects BackedEnum\\|Illuminate\\\\Contracts\\\\Support\\\\DeferringDisplayableValue\\|Illuminate\\\\Contracts\\\\Support\\\\Htmlable\\|string\\|null, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ServerCheckService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/ServerCheckService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:mapWithKeys\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: array\\<int\\|string, Fisharebest\\\\Webtrees\\\\Tree\\>, Closure\\(object\\)\\: non\\-empty\\-array\\<int\\|string, Fisharebest\\\\Webtrees\\\\Tree\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/TreeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/TreeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function feof expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/TreeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/TreeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function stream_filter_append expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/TreeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\UpgradeService\\:\\:downloadFile\\(\\) should return int but returns int\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Services\\\\UpgradeService\\:\\:webtreesZipContents\\(\\) should return Illuminate\\\\Support\\\\Collection\\<int, string\\> but returns Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\), mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of method Illuminate\\\\Support\\\\Collection\\<int,string\\>\\:\\:contains\\(\\) expects \\(callable\\(string, int\\)\\: bool\\)\\|string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$location of method League\\\\Flysystem\\\\FilesystemWriter\\:\\:delete\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function ftell expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function rewind expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Services/UpgradeService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\User, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\User given\\.$#',
	'count' => 13,
	'path' => __DIR__ . '/app/Services/UserService.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Site\\:\\:getPreference\\(\\) should return string but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Site.php',
];
   $ignoreErrors[] = [
	'message' => '#^Static property Fisharebest\\\\Webtrees\\\\Site\\:\\:\\$preferences \\(array\\<string, string\\>\\) does not accept array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Site.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\:\\:statsAgeQuery\\(\\) should return array\\<array\\<stdClass\\>\\> but returns array\\<stdClass\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\.\\.\\.\\$params of method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:totalGivennames\\(\\) expects string, array\\<string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\.\\.\\.\\$params of method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:totalSurnames\\(\\) expects string, array\\<string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartAge.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$century of method Fisharebest\\\\Webtrees\\\\Statistics\\\\Service\\\\CenturyService\\:\\:centuryName\\(\\) expects int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartAge.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartBirth.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartChildren.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartDeath.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$gedcom on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartDistribution.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$place on mixed\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Statistics/Google/ChartDistribution.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:pluck\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Statistics/Google/ChartDistribution.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartDivorce.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Google\\\\ChartFamilyLargest\\:\\:queryRecords\\(\\) should return array\\<object\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartFamilyLargest.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartMarriage.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(object\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartMarriageAge.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$century of method Fisharebest\\\\Webtrees\\\\Statistics\\\\Service\\\\CenturyService\\:\\:centuryName\\(\\) expects int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartMarriageAge.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Google\\\\ChartNoChildrenFamilies\\:\\:queryRecords\\(\\) should return array\\<object\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Google/ChartNoChildrenFamilies.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$age on mixed\\.$#',
	'count' => 9,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$famid on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$family on mixed\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$i_id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$id on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method canShow\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method formatList\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method fullName\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method getBirthDate\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method husband\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method url\\(\\) on Fisharebest\\\\Webtrees\\\\Individual\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot call method wife\\(\\) on Fisharebest\\\\Webtrees\\\\Family\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to float\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\FamilyRepository\\:\\:ageBetweenSiblingsQuery\\(\\) should return array\\<object\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\FamilyRepository\\:\\:statsChildrenQuery\\(\\) should return array\\<stdClass\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Family, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Family given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: stdClass, Closure\\(stdClass\\)\\: stdClass given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/FamilyRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/HitCountRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$days on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGiven\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenFemale\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenFemaleList\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenFemaleListTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenFemaleTable\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenFemaleTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenList\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenListTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenMale\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenMaleList\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenMaleListTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenMaleTable\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenMaleTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenTable\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenUnknown\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenUnknownList\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenUnknownListTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenUnknownTable\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:commonGivenUnknownTotals\\(\\) should return string but returns array\\<int\\>\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Statistics\\\\Repository\\\\IndividualRepository\\:\\:statsAgeQuery\\(\\) should return array\\<stdClass\\> but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$ of closure expects object, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: Fisharebest\\\\Webtrees\\\\Individual, Closure\\(object\\)\\: Fisharebest\\\\Webtrees\\\\Individual given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: int, Closure\\(string\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:having\\(\\) expects Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:where\\(\\) expects array\\|Closure\\|string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callback of function array_walk expects callable\\(int, string\\)\\: mixed, Closure\\(string, string\\)\\: void given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$given of method Fisharebest\\\\Webtrees\\\\Statistics\\\\Google\\\\ChartCommonGiven\\:\\:chartCommonGiven\\(\\) expects array\\<int\\>, array\\<int\\>\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/IndividualRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/LatestUserRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: int, Closure\\(string\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/MediaRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:pluck\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/MediaRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$tree on mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/PlaceRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of method Illuminate\\\\Support\\\\Collection\\<\\(int\\|string\\),mixed\\>\\:\\:map\\(\\) expects callable\\(mixed, \\(int\\|string\\)\\)\\: int, Closure\\(string\\)\\: int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/PlaceRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$column of method Illuminate\\\\Database\\\\Query\\\\Builder\\:\\:pluck\\(\\) expects string, Illuminate\\\\Database\\\\Query\\\\Expression given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Statistics/Repository/PlaceRepository.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\SurnameTradition\\\\PatrilinealSurnameTradition\\:\\:inflect\\(\\) should return string but returns string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/SurnameTradition/PatrilinealSurnameTradition.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/SurnameTradition/PatrilinealSurnameTradition.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$resn on mixed\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/app/Tree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$tag_type on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Tree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xref on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/app/Tree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Method Fisharebest\\\\Webtrees\\\\Tree\\:\\:getPreference\\(\\) should return string but returns mixed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Tree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Tree\\:\\:\\$preferences \\(array\\<string\\>\\) does not accept array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Tree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\Tree\\:\\:\\$user_preferences \\(array\\<array\\<string\\>\\>\\) does not accept array\\<array\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Tree.php',
];
   $ignoreErrors[] = [
	'message' => '#^Property Fisharebest\\\\Webtrees\\\\User\\:\\:\\$preferences \\(array\\<string, string\\>\\) does not accept array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/User.php',
];
   $ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$url of function parse_url expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Validator.php',
];
   $ignoreErrors[] = [
	'message' => '#^Ternary operator condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/app/Webtrees.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];