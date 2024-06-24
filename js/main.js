// $("document").ready(() =>{

//     else{
//         alert("bitch");
//     }
// })

function deskTopFormSubmit(e) {
         if($(".username").val().length === 0){
            e.preventDefault();
            $(".err-box-subtitle").text("Fill in the empty boxes");
            $(".error-box").removeClass("hide");
         }
         setInterval(()=>{
            $(".error-box").addClass("hide");
         },3000)
}

$("#Main_form").on("submit", deskTopFormSubmit);