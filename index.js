// Boş bir dizi oluştur
var team = []
let team_name

function processForm0() {
  team_name = document.getElementById('teamname').value
  localStorage.setItem('team_name', JSON.stringify(team_name))
}

// Sayfa 1'deki formu işleme
function processForm1() {
  // Form elemanlarını seç
  var name = document.getElementById('user1name').value
  var surname = document.getElementById('user1surname').value
  var nickname_valo = document.getElementById('user1valonick').value
  var nickname_disc = document.getElementById('user1discnick').value

  if (localStorage.getItem('team_name')) {
    team_name = JSON.parse(localStorage.getItem('team_name'))
  }

  // Objeyi oluştur
  var user = {
    team_name: team_name,
    name: name,
    surname: surname,
    nickname_valo: nickname_valo,
    nickname_disc: nickname_disc,
  }

  // Kullanıcıyı diziye ekle
  team.push(user)

  // localStorage'da team öğesini güncelle
  localStorage.setItem('team', JSON.stringify(team))
}

// Sayfa 2'deki formu işleme
function processForm2() {
  // Form elemanlarını seç
  var name = document.getElementById('user2name').value
  var surname = document.getElementById('user2surname').value
  var nickname_valo = document.getElementById('user2valonick').value
  var nickname_disc = document.getElementById('user2discnick').value

  if (localStorage.getItem('team_name')) {
    team_name = JSON.parse(localStorage.getItem('team_name'))
  }

  // Objeyi oluştur
  var user = {
    team_name: team_name,
    name: name,
    surname: surname,
    nickname_valo: nickname_valo,
    nickname_disc: nickname_disc,
  }

  if (localStorage.getItem('team')) {
    team = JSON.parse(localStorage.getItem('team'))
  }

  // Kullanıcıyı diziye ekle
  team.push(user)

  // localStorage'da team öğesini güncelle
  localStorage.setItem('team', JSON.stringify(team))
}

// Sayfa 3'deki formu işleme
function processForm3() {
  // Form elemanlarını seç
  var name = document.getElementById('user3name').value
  var surname = document.getElementById('user3surname').value
  var nickname_valo = document.getElementById('user3valonick').value
  var nickname_disc = document.getElementById('user3discnick').value

  if (localStorage.getItem('team_name')) {
    team_name = JSON.parse(localStorage.getItem('team_name'))
  }

  // Objeyi oluştur
  var user = {
    team_name: team_name,
    name: name,
    surname: surname,
    nickname_valo: nickname_valo,
    nickname_disc: nickname_disc,
  }

  if (localStorage.getItem('team')) {
    team = JSON.parse(localStorage.getItem('team'))
  }

  // Kullanıcıyı diziye ekle
  team.push(user)

  // localStorage'da team öğesini güncelle
  localStorage.setItem('team', JSON.stringify(team))
}

// Sayfa 4'deki formu işleme
function processForm4() {
  // Form elemanlarını seç
  var name = document.getElementById('user4name').value
  var surname = document.getElementById('user4surname').value
  var nickname_valo = document.getElementById('user4valonick').value
  var nickname_disc = document.getElementById('user4discnick').value

  if (localStorage.getItem('team_name')) {
    team_name = JSON.parse(localStorage.getItem('team_name'))
  }

  // Objeyi oluştur
  var user = {
    team_name: team_name,
    name: name,
    surname: surname,
    nickname_valo: nickname_valo,
    nickname_disc: nickname_disc,
  }

  if (localStorage.getItem('team')) {
    team = JSON.parse(localStorage.getItem('team'))
  }

  // Kullanıcıyı diziye ekle
  team.push(user)

  // localStorage'da team öğesini güncelle
  localStorage.setItem('team', JSON.stringify(team))
}

// Sayfa 5'deki formu işleme
function processForm5() {
  // Form elemanlarını seç
  var name = document.getElementById('user5name').value
  var surname = document.getElementById('user5surname').value
  var nickname_valo = document.getElementById('user5valonick').value
  var nickname_disc = document.getElementById('user5discnick').value

  if (localStorage.getItem('team_name')) {
    team_name = JSON.parse(localStorage.getItem('team_name'))
  }

  // Objeyi oluştur
  var user = {
    team_name: team_name,
    name: name,
    surname: surname,
    nickname_valo: nickname_valo,
    nickname_disc: nickname_disc,
  }

  if (localStorage.getItem('team')) {
    team = JSON.parse(localStorage.getItem('team'))
  }

  // Kullanıcıyı diziye ekle
  team.push(user)

  // localStorage'da team öğesini güncelle
  localStorage.setItem('team', JSON.stringify(team))
}

// Sayfa 6'deki formu işleme
function processForm6() {
  // Form elemanlarını seç
  var name = document.getElementById('user6name').value
  var surname = document.getElementById('user6surname').value
  var nickname_valo = document.getElementById('user6valonick').value
  var nickname_disc = document.getElementById('user6discnick').value

  if (localStorage.getItem('team_name')) {
    team_name = JSON.parse(localStorage.getItem('team_name'))
  }

  // Objeyi oluştur
  var user = {
    team_name: team_name,
    name: name,
    surname: surname,
    nickname_valo: nickname_valo,
    nickname_disc: nickname_disc,
  }

  if (localStorage.getItem('team')) {
    team = JSON.parse(localStorage.getItem('team'))
  }

  // Kullanıcıyı diziye ekle
  team.push(user)

  // localStorage'da team öğesini güncelle
  localStorage.setItem('team', JSON.stringify(team))

  // Tüm kullanıcıları göster
  console.log(team)
}
