/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function displayNorway(){
    $('.English').hide();
    $('.Norway').show();
    document.title = "Style Play";
}
function displayEnglish(){
    $('.Norway').hide();
    $('.English').show();
    document.title = "Style Play";
}
function langSelector(){
    var userLang = navigator.language || navigator.userLanguage;
    if(userLang=='no'||userLang=='nb-NO'||userLang=='nn-NO'){
        
        displayNorway();
        //alert(userLang);
    }
    else{
    	displayEnglish();
        //alert(userLang);
    }
}