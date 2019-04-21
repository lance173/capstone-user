
// Hours of Service 

function showdowntownhours() {	
	document.getElementById("downtowncampus-library").style.display = 'block';		
	document.getElementById("northcampus-library").style.display = "none";	
	document.getElementById("southcampus-library").style.display = "none";
	document.getElementById("talambancampus-library").style.display = "none";
}

function shownorthhours() {
	document.getElementById("northcampus-library").style.display = "block";
	document.getElementById("downtowncampus-library").style.display = "none";	
	document.getElementById("southcampus-library").style.display = "none";
	document.getElementById("talambancampus-library").style.display = "none";
}

function showsouthhours() {
	document.getElementById("southcampus-library").style.display = "block";
	document.getElementById("northcampus-library").style.display = "none";
	document.getElementById("downtowncampus-library").style.display = "none";	
	document.getElementById("talambancampus-library").style.display = "none";
}

function showtalambanhours() {
	document.getElementById("talambancampus-library").style.display = "block";
	document.getElementById("northcampus-library").style.display = "none";
	document.getElementById("downtowncampus-library").style.display = "none";	
	document.getElementById("southcampus-library").style.display = "none";
	
}

$(document).ready(function() {
	var showChar = 100;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});

function clickArticle(ArticleID){
	window.location='ArticlePage.php?id='+ArticleID;
}


function reportComment(CommentID){
	$.ajax({
		method: 'POST',
		url: '../../capstone-user/controllers/Article&CommentController.php?function=getReportedComment',
		data: {
			id: CommentID
		},
		dataType: 'json',
		success: function (response) {
			console.log(response.data);
			$('#reported-photo').attr('src', '../../capstone-admin'+(response.data.offenderPhoto));
			$('#reported-firstname').text(response.data.offenderFirstName);
			$('#reported-lastname').text(response.data.offenderLastName);
			$('#reportcomment-content').text(response.data.Content);
			$('#articleID').val(response.data.ArticleID);
			$('#commentID').val(response.data.CommentID);
			$('#reportedUserID').val(response.data.offenderID);
		}
	}
	);

}

function checkForm(form){
  
 if(form.oldPassword.value != form.oldPassConfirm.value) {
    alert("Error: Password does not match your current password!");
    form.newPassword.focus();
    return false;
  }

if(form.newPassword.value != "" && form.newPassword.value == form.confirmPassword.value) {
  if(form.newPassword.value.length < 6) {
    alert("Error: Password must contain at least six characters!");
    form.newPassword.focus();
    return false;
  }

  if(form.newPassword.value == form.oldPassword.value && form.oldPassword.value != form.oldPassConfirm.value) {
    alert("Error: Password must be different from previous password!");
    form.newPassword.focus();
    return false;
  }

} else {
  alert("Error: Please check that you've entered and confirmed your password!");
  form.newPassword.focus();
  return false;
}

	alert("Password successfully updated!");
	return true;
}

function submitComment(form, isLoggedIn, accountStatus){
	
	if (isLoggedIn == 'false'){
		alert("You need Login to comment");
		return false;
	}
	else if (accountStatus == 'BLOCKED'){
		alert("Your Account Status is Blocked!");
		return false;
	}
	else {
		return true;
	}
}

function submitReport(form) {

	if(form.currentUser.value == form.reportedUser.value){
		alert("You cannot report your own comment.");
		return false;
	}
	else {
		alert("Report sucessfully submitted!");
		return true;
	}
}

function submitRating(form, accountStatus, isRated){

	if(form.starrating.value == 0){
		alert("Input number of stars");
		return false;
	}
	else if (accountStatus == 'BLOCKED'){
		alert("Your Account Status is Blocked!");
		return false;
	}
	else if (isRated == 'true'){
		alert("You cannot rate more than once!");
		return false;
	}
	else {
		alert("Thank you for your feedback!");
		return true;
	}
}


function logoutPopup(){
	alert("Signing out");
	window.location='../controllers/Logout.php';
}