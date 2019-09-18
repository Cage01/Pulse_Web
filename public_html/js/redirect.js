firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    window.location = '../globalUI/signedInNavbar';
  } else {
    // No user is signed in.
  }
});

