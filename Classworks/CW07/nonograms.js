(function(){
  "use strict";

  //setting up an event handler when page loads (part i)
  window.onload = function() {
    setup();

    //added a way to clear the nonogram (part v)
    id("clear").onclick = clearbutton;
  };

  //added a way for the mouse to drag (part vi)
  let current = "";
  let drag = false;
  window.onmouseup = function() {
    current = "";
    drag = false;
  };

  //setting up the board
  function setup() {
    //attaching function for every tile to .box class
    let tiles = select(".box");
    for (let i = 0; i < tiles.length; i++) {
      let div = tiles[i];

      /* commenting out part i so that my focus is on part ii
      //pop up message for when user click on tile (part i)
      div.onclick = function() {
        alert("You clicked a tile!");
      };
      */

      /* commenting out part ii so that I can modify it for part vi
      //calling function to fill in a tile (part ii)
      div.onclick = changetiles;
      */

      //modified part ii to let mouse drag and fill in tiles
      div.onmousedown = changetiles;
      div.onmouseover = dragandfill;
      div.onclick = function() {
        drag = false;
        current = "";
      };
    }
  }

  //function that makes a single tile turn black (part ii)
  function changetiles() {
    //modified by adding if-else to implement fill toggling (part iii)
    //added drag & fill elements and crossed-out class to the function (part vi & vii)
    drag = true;
    if (this.classList.contains("filled")) {
      this.classList.remove("filled");
      this.classList.add("crossed-out");
      current = "crossed-out";
    }
    else if (this.classList.contains("crossed-out")) {
      this.classList.remove("crossed-out");
      current = "";
    }
    else {
      this.classList.add("filled");
      current = "filled";
    }
  }

  //function to clear the puzzle (part v)
  function clearbutton() {
    if (confirm("Are you sure you want to clear the puzzle?")) {
      let tiles = select(".box");
      for (let i = 0; i < tiles.length; i++) {
        //modified so that it will remove all crossed-out elements as well
        tiles[i].classList.remove("filled", "crossed-out");
      }
    }
  }

  //function to fill in multiple boxes at once (part vi)
  function dragandfill() {
    if (drag) {
      if (current == "") {
        //alowing user to drag x's across the page
        this.classList.remove("crossed-out");
      }
      else if (current == "filled") {
        this.classList.add("filled");
        this.classList.remove("crossed-out");
      }
      else {
        this.classList.add("crossed-out");
        this.classList.remove("filled");
      }
    }
  }



  //functions I took from solution page, hope this is okay
  //returns element with id of specified value
  function id(id) {
    return document.getElementById(id);
  }
  //returns array elements that matches the css selector
  function select(query) {
    return document.querySelectorAll(query);
  }
})();
