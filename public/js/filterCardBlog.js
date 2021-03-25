// Source: https://www.w3schools.com/howto/howto_js_filter_lists.asp

function filterCardListBlog() {

  input = document.getElementById('inputFilterBlog');
  filter = input.value.toUpperCase();
  ul = document.getElementById("cardListBlog");
  li = ul.getElementsByTagName('li');

  for (i = 0; i < li.length; i++) {
    pSubTitle = li[i].getElementsByTagName("p")[0];
    pDescription = li[i].getElementsByTagName("p")[1];
    h5 = li[i].getElementsByTagName("h5")[0];

    // txtValue = p.textContent || p.innerText;
    h5TxtValue = (h5.textContent || h5.innerText).toUpperCase().indexOf(filter) > -1;
    pSubTitleTxtValue = (pSubTitle.textContent || pSubTitle.innerText).toUpperCase().indexOf(filter) > -1;
    pDescriptionTxtValue = (pDescription.textContent || pDescription.innerText).toUpperCase().indexOf(filter) > -1;
    
    if (h5TxtValue || pSubTitleTxtValue || pDescriptionTxtValue) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}