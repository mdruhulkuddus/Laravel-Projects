function checkCourseName(){
    var courseName = $('#courseName').val();
    var regExp = /^[a-zA-Z-\.]{2,25}$/;
    if(regExp.test(courseName)){
        $('#courseNameError').text(' ');
        return true;
    }
    else{
        $('#courseNameError').text('First Name Should Be 2 to 25 character');
        return false;
    }
}


$('#courseName').keyup(function(){
    checkFirstName();
});

$(#courseAddForm).submit(function (){
   if(checkCourseName() == true)
       return true;
   else
       return false;
});
