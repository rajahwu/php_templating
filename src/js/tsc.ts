$(()=> {
    $("<p>Hello from jQuery</p>").addClass("text-white bg-blue-700  m-5 p-3 rounded").insertBefore("#react_root");
    $(".test").addClass("test-apply m-5 p-3 rounded").insertBefore("#react_root");
    $(".test").on("click", function() {$(this).toggleClass("test-apply")})
})