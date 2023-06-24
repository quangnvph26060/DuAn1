<style>
  .footer {
    background: #2566CA;
    min-height: 60px;
    text-align: center;
 
  }

</style>
<div class="row mb footer">
    <p>Nguyễn Văn Quang PH26060</p>

  
</div>
</div>
<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
</script>
</body>

</html>