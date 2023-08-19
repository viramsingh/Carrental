function submitBooking() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var startDate = document.getElementById('pickup-date').value;
  var endDate = document.getElementById('return-date').value;
  
  // Perform validation and submit the booking data to the server
  if (name && email && phone && startDate && endDate) {
    // Send the booking details to the server using AJAX or any preferred method
    console.log('Booking submitted successfully!');
    alert('Booking submitted successfully!');
  } else {
    alert('Please fill in all the required fields!');
  }
}




// humburger js
  //Hamburger Javascript
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");
  
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
  
  })
  
  document.querySelectorAll(".nav-link").forEach(n => {
    n.addEventListener("click", () => {
      hamburger.classList.remove("active");
      navMenu.classList.remove("active");
    })
  })
  
  window.onscroll = function (e) {
    // called when the window is scrolled.  
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  } 