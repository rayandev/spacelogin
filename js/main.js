function FormSubmit(e) {
    if ($(".username").val().length === 0) {
        e.preventDefault();
        $(".err-box-subtitle").text("Fill in the empty boxes");
        $(".error-box").removeClass("hide");
        setTimeout(() => {
            $(".error-box").addClass("hide");
        }, 3000);
    } else {
        // فرم به صورت پیش‌فرض ارسال می‌شود
    }
}

$("#Main_form").on("submit", FormSubmit);
$("#main-form-mobile").on("submit", FormSubmit);
