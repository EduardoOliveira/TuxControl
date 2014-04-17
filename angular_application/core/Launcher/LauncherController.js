var launcherController = function ($scope, launcherService, $window) {

    $scope.gridsterOpts = {
        margins: [20, 20],
        columns: 10,
        draggable: {
            enabled: true
        },
        resizable: {
            enabled: true
        }
    };

    // these map directly to gridsterItem options
    $scope.standardItems = [
        {   sizeX: 1,
            sizeY: 1,
            row: 0,
            col: 0,
            content: {
                module: "",
                id: "",
                type: "icon",
                label: "SomeLabel",
                image: "http://3.bp.blogspot.com/_onTasmwBPdI/THLG8QZFcJI/AAAAAAAAABI/5-xif-JIeBc/s1600/brunocb-afro-tux-samourai.png",
                url: "http://google.pt"
            }
        },
        {   sizeX: 2,
            sizeY: 2,
            row: 0,
            col: 2,
            content: {
                dependencies: {
                    js: [],
                    css: []
                },
                module: "",
                id: "",
                type: "widget",
                html: "something"
            }
        },
        { sizeX: 1, sizeY: 1, row: 0, col: 0 },
        { sizeX: 1, sizeY: 1, row: 0, col: 5 },
        { sizeX: 2, sizeY: 1, row: 1, col: 0 },
        { sizeX: 1, sizeY: 1, row: 1, col: 4 },
        { sizeX: 1, sizeY: 2, row: 1, col: 5 },
        { sizeX: 1, sizeY: 1, row: 2, col: 0 },
        { sizeX: 2, sizeY: 1, row: 2, col: 1 },
        { sizeX: 1, sizeY: 1, row: 2, col: 3 },
        { sizeX: 1, sizeY: 1, row: 2, col: 4 }
    ];

    $scope.$watch('standardItems', function (items) {
    }, true);
}