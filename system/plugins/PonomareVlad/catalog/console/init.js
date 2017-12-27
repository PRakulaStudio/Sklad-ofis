(function () {

    if (!window.pms) return false;
    if (!window.pms.module) window.pms.module = {};
    if (!window.pms.module.installedPlugins) window.pms.module.installedPlugins = {};
    let installedPlugins = pms.module.installedPlugins;
    let template = installedPlugins.template = {};
    window.showPlugin = showPlugin;

    installedPlugins.workspaceGenerator = function (parameters = false) {
        if (pms.workspace.wrapper) pms.workspace.wrapper.innerHTML = 'installedPlugins';
        return {status: false};
    };

    installedPlugins.menuItemsWorker = function (parameters = false) {
        return [{id: 'catalog_plugin', title: 'Каталог', type: 'group'}];
    };

    function showPlugin(id) {
        console.debug(showPlugin, id);
    }

    function getInstalledPlugins() {
        // io('').
    }

})();