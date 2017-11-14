/**
 * Created by Massil on 04/10/2017.
 */
app.service('MailService' , function ($http) {
    this.sendEmail = function (name , email , message) {
        $http.header({"Content-Type" : 'application/json'});
        var promise = $http.post(apiUrl + 'mail' ,
            {name : name , email : email , message : message});
        return promise;
    }
});