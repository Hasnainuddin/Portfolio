function showSection(sectionNumber) {
        const section1 = document.getElementById("section1");
        const section2 = document.getElementById("section2");
        const link1 = document.getElementById("link1");
        const link2 = document.getElementById("link2");

        if (sectionNumber === 1) {
          section1.style.display = "block";
          section2.style.display = "none";
          link1.classList.add("active-link");
          link2.classList.remove("active-link");
        } else {
          section1.style.display = "none";
          section2.style.display = "block";
          link1.classList.remove("active-link");
          link2.classList.add("active-link");
        }
      }