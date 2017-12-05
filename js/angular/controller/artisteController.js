app.controller('ArtisteController' , function ($scope , artisteService) {
    $scope.artistes = [];

    $scope.getArtistesInformation = function () {
        $scope.artistes = artisteService.getArtistesInformation();
        console.log($scope.artistes);
    };
    
    $scope.openModal = function (id) {
        var modal = document.getElementById('artiste' + id);
        modal.style.display = "block";
    };
    
    $scope.closeModal = function (id) {
        var modal = document.getElementById('artiste' + id);
        modal.style.display = "none";

    };

});