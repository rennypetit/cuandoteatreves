//color de los tags
$( document ).ready(function() {
    //etiquetas del single
    $totalTags = $('.tags').find('a').length;
    $restant = 0;
    for (var i = 0; i < $totalTags; i++) {
      if ($restant == 5) {
        $restant =0;
      }

      if ($restant == 0) {
        $tags = $('.tags').find('a')[i]; 
        $('.tags').find($tags).addClass('btn-warning');  
      }else if ($restant == 1) {
        $tags = $('.tags').find('a')[i]; 
        $('.tags').find($tags).addClass('btn-primary'); 
      }else if ($restant ==2) {
        $tags = $('.tags').find('a')[i]; 
        $('.tags').find($tags).addClass('btn-danger'); 
      }else if ($restant ==3) {
        $tags = $('.tags').find('a')[i]; 
        $('.tags').find($tags).addClass('btn-success');
      }else if ($restant ==4) {
        $tags = $('.tags').find('a')[i]; 
        $('.tags').find($tags).addClass('btn-info');
      }
      $restant++;
    }
  });


//categorias y etiquetas
var arrayCategory = $('#title-category').text().split(" ");//obtengo el nombre de la categoria y con el metodo split inserto el nombre en un array y los separo por " " espacios
var quantityWord = Math.round((arrayCategory.length/2)); //divido el array entre 2 y lo redondeo para hacer el ciclo
var arrayBlack = [],arrayFucsia = [],black = 0,fucsia = 0; //inicializo los array y los contadores para ser usados en el ciclo for

//ciclo que recorre el array del titulo del titulo
for (var i = 0; i < arrayCategory.length; i++) {
  //condicional que permite que la midad dl titulo este en negro y la otra midad en fucsia
  if (i < quantityWord) {
    arrayBlack[black] = arrayCategory[i];//array para letras negras
    black +=1;
  }else{
    arrayFucsia[fucsia] = arrayCategory[i];//array para letras fucsia
    fucsia +=1;
  }
}
var titleBlack = arrayBlack.join(" ");//reemplazo la , por espacio
titleBlack.toString();//convierte el arry en string
$('#category-black h2 span').text(titleBlack);//Inserta el titulo de color negro en el DOM
$('#category-black h2 span').css('margin-right', '20px');//space word split
var titleFucsia = arrayFucsia.join(" ");//reemplazo la , por espacio
titleFucsia.toString();//convierte el arry en string
$('#category-fucsia h2 span').text(titleFucsia);//Inserta el titulo de color negro en el Fucsia