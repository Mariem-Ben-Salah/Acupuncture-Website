
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName("filtre_mer")
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
function onlyOne2(checkbox) {
    var checkboxes = document.getElementsByName("filtre_type")
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
