<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

<!-- Custom Scripts -->
<script>

ScrollReveal({
  duration: 800,
  scale: 0.7,
  distance: "34px",    
});
ScrollReveal().reveal('.scroll-reveal-item');

new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: false,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});

</script>