/**
 * Created by Massil on 04/10/2017.
 */
app.controller('MailController' , ['$scope' , 'MailService', function($scope, mailService ){
    $scope.name = '';
    $scope.email = '';
    $scope.message = '';

    $scope.sendMail = function () {
        if(grecaptcha.getResponse() != "")
        {
            console.log("Sending mail...");
            var promise = mailService.sendEmail($scope.name, $scope.email, $scope.message);
            promise.then(function (response) {
                window.location.replace('#confirmation');
                console.log("OK");
            } , function (error) {
                window.location.replace('#errorContact');
                console.log("KO");
                console.log( error);
            })
        }
    };
}]);