var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/mw/load.php","apiScript":"/mw/api.php"}});mw.loader.register([["site","1601471480",[],"site"],["noscript","1586259333",[],"noscript"],["startup","1637725342",[],"startup"],["filepage","1586259333"],["user.groups","1586259333",[],"user"],["user","1586259333",[],"user"],["user.cssprefs","1586259333",["mediawiki.user"],"private"],["user.options","1586259333",[],"private"],["user.tokens","1586259333",[],
"private"],["mediawiki.language.data","1586259333",["mediawiki.language.init"]],["mediawiki.skinning.elements","1586259333"],["mediawiki.skinning.content","1586259333"],["mediawiki.skinning.interface","1586259333"],["skins.cologneblue","1586259333"],["skins.modern","1586259333"],["skins.vector.styles","1586259333"],["skins.monobook.styles","1586259333"],["skins.vector.js","1586259333",["jquery.throttle-debounce"]],["skins.vector.collapsibleNav","1631926207",["jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1586259333"],["jquery.appear","1586259333"],["jquery.arrowSteps","1586259333"],["jquery.async","1586259333"],["jquery.autoEllipsis","1586259333",["jquery.highlightText"]],["jquery.badge","1586259333",["mediawiki.language"]],["jquery.byteLength","1586259333"],["jquery.byteLimit","1586259333",["jquery.byteLength"]],["jquery.checkboxShiftClick","1586259333"],["jquery.chosen","1586259333"],["jquery.client","1586259333"],["jquery.color","1586259333",["jquery.colorUtil"]],[
"jquery.colorUtil","1586259333"],["jquery.cookie","1586259333"],["jquery.delayedBind","1586259333"],["jquery.expandableField","1586259333"],["jquery.farbtastic","1586259333",["jquery.colorUtil"]],["jquery.footHovzer","1586259333"],["jquery.form","1586259333"],["jquery.fullscreen","1586259333"],["jquery.getAttrs","1586259333"],["jquery.hidpi","1586259333"],["jquery.highlightText","1586259333",["jquery.mwExtension"]],["jquery.hoverIntent","1586259333"],["jquery.json","1586259333"],["jquery.localize","1586259333"],["jquery.makeCollapsible","1626108037"],["jquery.mockjax","1586259333"],["jquery.mw-jump","1586259333"],["jquery.mwExtension","1586259333"],["jquery.placeholder","1586259333"],["jquery.qunit","1586259333"],["jquery.qunit.completenessTest","1586259333",["jquery.qunit"]],["jquery.spinner","1586259333"],["jquery.jStorage","1586259333",["jquery.json"]],["jquery.suggestions","1586259333",["jquery.highlightText"]],["jquery.tabIndex","1586259333"],["jquery.tablesorter","1637725342",[
"jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1586259333",["jquery.client"]],["jquery.throttle-debounce","1586259333"],["jquery.validate","1586259333"],["jquery.xmldom","1586259333"],["jquery.tipsy","1586259333"],["jquery.ui.core","1586259333",[],"jquery.ui"],["jquery.ui.widget","1586259333",[],"jquery.ui"],["jquery.ui.mouse","1586259333",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1586259333",[],"jquery.ui"],["jquery.ui.draggable","1586259333",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1586259333",["jquery.ui.core","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.resizable","1586259333",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.selectable","1586259333",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.sortable","1586259333",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],
"jquery.ui"],["jquery.ui.accordion","1586259333",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1586259333",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],"jquery.ui"],["jquery.ui.button","1586259333",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1586259333",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1586259333",["jquery.ui.button","jquery.ui.core","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable","jquery.ui.widget"],"jquery.ui"],["jquery.ui.progressbar","1586259333",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1586259333",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.tabs","1586259333",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1586259333",[],"jquery.ui"],["jquery.effects.blind","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1586259333",[
"jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1586259333",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1586259333",["jquery.effects.core"],"jquery.ui"],["moment","1586259333"],["mediawiki","1586259333"],["mediawiki.api","1586259333",["mediawiki.util"]],["mediawiki.api.category","1586259333",[
"mediawiki.Title","mediawiki.api"]],["mediawiki.api.edit","1586259333",["mediawiki.Title","mediawiki.api","user.tokens"]],["mediawiki.api.login","1586259333",["mediawiki.api"]],["mediawiki.api.parse","1586259333",["mediawiki.api"]],["mediawiki.api.watch","1586259333",["mediawiki.api","user.tokens"]],["mediawiki.debug","1586259333",["jquery.footHovzer","jquery.tipsy"]],["mediawiki.debug.init","1586259333",["mediawiki.debug"]],["mediawiki.feedback","1586259333",["jquery.ui.dialog","mediawiki.Title","mediawiki.api.edit","mediawiki.jqueryMsg"]],["mediawiki.hidpi","1586259333",["jquery.hidpi"]],["mediawiki.hlist","1586259333",["jquery.client"]],["mediawiki.htmlform","1626907577"],["mediawiki.icon","1586259333"],["mediawiki.inspect","1586259333",["jquery.byteLength","jquery.json"]],["mediawiki.notification","1586259333",["mediawiki.page.startup"]],["mediawiki.notify","1586259333"],["mediawiki.searchSuggest","1626108037",["jquery.client","jquery.placeholder","jquery.suggestions",
"mediawiki.api"]],["mediawiki.Title","1586259333",["jquery.byteLength","mediawiki.util"]],["mediawiki.toc","1626108035",["jquery.cookie"]],["mediawiki.Uri","1586259333"],["mediawiki.user","1586259333",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1586259333",["jquery.client","jquery.mwExtension","mediawiki.notify","mediawiki.toc"]],["mediawiki.action.edit","1586259333",["jquery.byteLimit","jquery.textSelection","mediawiki.action.edit.styles"]],["mediawiki.action.edit.styles","1586259333"],["mediawiki.action.edit.collapsibleFooter","1586259333",["jquery.cookie","jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1586259333",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1586259333",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1586259333",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1586259333",["mediawiki.page.startup",
"mediawiki.util"]],["mediawiki.action.view.metadata","1626110097"],["mediawiki.action.view.postEdit","1626108037",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.redirectToFragment","1586259333",["jquery.client"]],["mediawiki.action.view.rightClickEdit","1586259333"],["mediawiki.action.edit.editWarning","1626163581",["mediawiki.jqueryMsg"]],["mediawiki.action.watch.ajax","1586259333",["mediawiki.page.watch.ajax"]],["mediawiki.language","1586259333",["mediawiki.cldr","mediawiki.language.data"]],["mediawiki.cldr","1586259333",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1586259333"],["mediawiki.language.init","1586259333"],["mediawiki.jqueryMsg","1586259333",["mediawiki.language","mediawiki.util"]],["mediawiki.language.months","1637725342",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1586259333"],["mediawiki.page.gallery","1586259333"],["mediawiki.page.ready","1586259333",["jquery.checkboxShiftClick","jquery.makeCollapsible",
"jquery.mw-jump","jquery.placeholder","mediawiki.util"]],["mediawiki.page.startup","1586259333",["mediawiki.util"]],["mediawiki.page.patrol.ajax","1631412231",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.notify","mediawiki.page.startup","mediawiki.util","user.tokens"]],["mediawiki.page.watch.ajax","1626139574",["jquery.mwExtension","mediawiki.api.watch","mediawiki.notify","mediawiki.page.startup","mediawiki.util"]],["mediawiki.page.image.pagination","1586259333",["jquery.spinner","mediawiki.Uri","mediawiki.util"]],["mediawiki.special","1586259333"],["mediawiki.special.block","1586259333",["mediawiki.util"]],["mediawiki.special.changeemail","1629074571",["mediawiki.util"]],["mediawiki.special.changeslist","1586259333"],["mediawiki.special.changeslist.legend","1586259333"],["mediawiki.special.changeslist.legend.js","1586259333",["jquery.cookie","jquery.makeCollapsible"]],["mediawiki.special.changeslist.enhanced","1586259333"],["mediawiki.special.movePage","1586259333",[
"jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1586259333"],["mediawiki.special.preferences","1631925851",["mediawiki.language"]],["mediawiki.special.recentchanges","1586259333",["mediawiki.special"]],["mediawiki.special.search","1626110117"],["mediawiki.special.undelete","1586259333"],["mediawiki.special.upload","1629109205",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.common.styles","1586259333"],["mediawiki.special.userlogin.signup.styles","1586259333"],["mediawiki.special.userlogin.login.styles","1586259333"],["mediawiki.special.userlogin.common.js","1626122788"],["mediawiki.special.userlogin.signup.js","1626375911",["jquery.throttle-debounce","mediawiki.api","mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1586259333",["jquery.qunit"]],["mediawiki.special.version","1586259333"],["mediawiki.legacy.ajax","1586259333",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.commonPrint","1586259333"],[
"mediawiki.legacy.config","1586259333",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1586259333",["jquery.byteLimit"]],["mediawiki.legacy.shared","1586259333"],["mediawiki.legacy.oldshared","1586259333"],["mediawiki.legacy.upload","1586259333",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.util"]],["mediawiki.legacy.wikibits","1586259333",["mediawiki.util"]],["mediawiki.ui","1586259333"],["mediawiki.ui.button","1586259333"],["oojs","1586259333"],["oojs-ui","1586259333",["oojs"]],["jquery.wikiEditor","1629899515",["jquery.client","jquery.textSelection"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1586259333",["jquery.tabIndex","jquery.ui.button","jquery.ui.dialog","jquery.ui.draggable","jquery.ui.resizable","jquery.wikiEditor","jquery.wikiEditor.toolbar"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1586259333",["jquery.suggestions","jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","mediawiki.Title",
"mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1586259333",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1586259333",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1586259333",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1586259333",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1586259333",["jquery.async","jquery.cookie","jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1586259333",[],"ext.wikiEditor"],["ext.wikiEditor","1586259333",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1586259333",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.preview","1586259333",[
"ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1586259333",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1586259333",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1586259333",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1586259333",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1586259333",[],"ext.wikiEditor"],["skins.bootstrapskin","1586259333"],["ext.geshi.local","1586259333"],["ext.BootStrapSkinContact","1586259333"],["ext.BootStrapSkinSlideshow","1629900603"]]);mw.config.set({"wgLoadScript":"/mw/load.php","debug":false,"skin":"bootstraphalcyon","stylepath":"/mw/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/$1","wgScriptPath":"/mw","wgScriptExtension":".php","wgScript":"/mw/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://wiki.radxa.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.23.3","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Home","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Radxa wiki","5":"Radxa wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":
0,"talk":1,"user":2,"user_talk":3,"radxa_wiki":4,"radxa_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Radxa Wiki","wgFileExtensions":["png","gif","jpg","jpeg","jp2","webp","ppt","pdf","psd","mp3","xls","xlsx","swf","doc","docx","odt","odc","odp","odg","mpp","3mf","ply","zip","tar.gz","rar"],"wgDBname":"radxa_wiki","wgFileCanRotate":true,"wgAvailableSkins":{"bootstraphalcyon":"Bootstrap","modern":"Modern","monobook":"MonoBook","cologneblue":"CologneBlue","vector":"Vector"},"wgExtensionAssetsPath":"/mw/extensions","wgCookiePrefix":"radxa_wiki_radxa_wiki","wgResourceLoaderMaxQueryLength":512,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false,
"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});};if(isCompatible()){document.write("\u003Cscript src=\"/mw/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=bootstraphalcyon\u0026amp;version=20181126T152805Z\"\u003E\u003C/script\u003E");};
/* cache key: radxa_wiki-radxa_wiki:resourceloader:filter:minify-js:7:406f1cff5b9f6baa014c02c505ab4ba1 */