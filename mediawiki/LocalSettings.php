$wgServer = "http://localhost:8080";
$wgArticlePath = "/wiki/$1";
$wgScriptPath = "";

$wgMainCacheType = CACHE_NONE;
$wgCacheDirectory = false;

wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

wfLoadExtension( 'CheckUser' );
$wgCommentStreamsAllowedNamespaces = [0];
$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;

wfLoadExtension( 'ManageWiki' );
$wgManageWikiModulesEnabled = [ 'core' => true, 'extensions' => true, 'namespaces' => true, 'permissions' => true, 'settings' => true, ];
$wgManageWikiExtensionsDefault = [
        'categorytree',
        'cite',
        'citethispage',
        'codeeditor',
        'codemirror',
        'minervaneue',
        'purge',
        'syntaxhighlight_geshi',
        'templatestyles',
        'textextracts',
        'urlshortener',
        'wikiseo',
];

wfLoadExtension( 'CreateWiki' );
$wgCreateWikiCacheDirectory = "/var/www/html/cache";
$wgRequestWikiConfirmEmail = false;
$wgGroupPermissions['bureaucrat']['createwiki'] = true;

wfLoadExtension( 'WikiDiscover' );

wfLoadExtension( 'CommentStreams' );

$wgShowExceptionDetails = true;
