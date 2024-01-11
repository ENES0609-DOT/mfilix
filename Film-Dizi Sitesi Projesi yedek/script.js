const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");
arrows.forEach((arrow, i) => {
    const widthRatio = Math.floor(window.innerWidth / 300);
  let clickCounter = 0;
  const imageItem = movieLists[i].querySelectorAll("img").length;
  arrow.addEventListener("click", function () {
    clickCounter++;
    if (imageItem - (4 + clickCounter) + (4 - widthRatio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });
});

  /* dark mode */

  const ball = document.querySelector(".toggle-ball");
  const items = document.querySelectorAll(".container,.navbar,.sidebar,.sidebar i,.movie-list-title,.toggle,.toggle-ball,.movie-list-filter select");

  ball.addEventListener("click", function(){
    items.forEach((item) => item.classList.toggle("active"));
    document.querySelector('.search-container form').addEventListener('submit', function(event) {
      event.preventDefault(); // prevent the form from submitting
     
      var series = document.getElementById('series').value; // get the search input value
     
      // Here you can add the code to fetch the movie data from the server using AJAX.
      // Replace the "movieList" variable below with the server's response.
     
      var movieList = [
        {title: 'Series 1', year: 2018},
        {title: 'Series 2', year: 2019},
        {title: 'Series 3', year: 2020},
      ];
     
      var movieResultContainer = document.createElement('div');
      movieResultContainer.className = 'movie-result-container';
     
      movieList.forEach(function(movie) {
        if (movie.title.toLowerCase().includes(series.toLowerCase())) {
          var movieResult = document.createElement('div');
          movieResult.className = 'movie-result';
     
          var movieTitle = document.createElement('h3');
          movieTitle.textContent = movie.title;
     
          var movieYear = document.createElement('p');
          movieYear.textContent = movie.year;
     
          movieResult.appendChild(movieTitle);
          movieResult.appendChild(movieYear);
     
          movieResultContainer.appendChild(movieResult);
        }
      });
     
      document.querySelector('.search-container').appendChild(movieResultContainer);
     });
    
});

