function ConfirmSave(){
    var isconfirm = window.confirm("Do you want to save it?");
    if(isconfirm)
        self.location = "homepage.html";
}