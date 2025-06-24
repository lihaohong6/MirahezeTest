$wgServer = "http://localhost:8080";
$wgArticlePath = "/wiki/$1";
$wgScriptPath = "";

$wgMainCacheType = CACHE_NONE;
$wgCacheDirectory = false;

wfLoadExtension( 'AntiSpoof' );

wfLoadExtension( 'CheckUser' );
$wgCommentStreamsAllowedNamespaces = [0];
$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;

wfLoadExtension( 'ManageWiki' );
wfLoadExtension( 'CreateWiki' );

$wgShowExceptionDetails = true;
