document.querySelectorAll(".gallery-item img").forEach((image) => {
  image.addEventListener("click", () => {
    const lightbox = document.getElementById("lightbox");
    const lightboxContent = document.getElementById("lightbox-content");
    lightboxContent.src = image.src;
    lightbox.style.display = "flex";
  });
});

document.querySelector(".close").addEventListener("click", () => {
  document.getElementById("lightbox").style.display = "none";
});
