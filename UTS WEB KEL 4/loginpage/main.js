const loginBtn = document.getElementById('btn');

loginBtn.addEventListener("click", function(event) {
  const loginBtn = document.getElementById('btn');
  event.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("pass").value;

  if(username == '' && password == '')
  {
    alert('Username dan password perlu diisi !');
  }else if(username == '')
  {
    alert('Username perlu diisi !');
  }else if(password == '')
  {
    alert('Password perlu diisi !')
  }
  else if(username == "kelompok-4" && password == "website")
  {
    window.location.href = '../homepage/index.html'
  }
  else{
    alert("Login anda gagal !")
  }
});