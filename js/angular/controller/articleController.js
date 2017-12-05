app.controller('ArticleController' , function ($scope, articleService) {
    $scope.articles = [];
    
    $scope.displayFirstSectionArticle = function () {
        document.getElementById("sectionMyArticles").style.display = 'block';
        document.getElementById("sectionMyProjects").style.display = 'none';
    };
    
    $scope.displaySecondSectionArticle = function () {
        document.getElementById("sectionMyArticles").style.display = 'none';
        document.getElementById("sectionMyProjects").style.display = 'block';
    }
});