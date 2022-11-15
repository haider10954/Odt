var selDiv = "";
var storedFiles = [];
var fileslist_ = new DataTransfer();
$(document).ready(function () {
    $("#additional_picture").on("change", handleFileSelect);

    selDiv = $("#other_images_preview");
    // $("#myForm").on("submit", handleForm);

    $("body").on("click", ".remove-image-preview", removeFile);
});

var oImagesIndex = 0;

function handleFileSelect(e) {
    var files = e.target.files;
    var filesArr = Array.prototype.slice.call(files);
    if (filesArr.length > 0) {
        storedFiles = [];
        fileslist_ = new DataTransfer();
        selDiv.html("");
        filesArr.forEach(function (f, index) {
            fileslist_.items.add(f);
            if (!f.type.match("image.*")) {
                return;
            }
            storedFiles.push(f);
            var reader = new FileReader();
            reader.onload = function (e) {
                selDiv.append(otherImageHtml(e, f, oImagesIndex));
                oImagesIndex++;
            };
            reader.readAsDataURL(f);
        });
    }
    e.target.files = fileslist_.files;
}

function removeFile(e) {
    var file = $(this).data("file");
    if (!$(this).hasClass("uploaded")) {
        for (var i = 0; i < storedFiles.length; i++) {
            if (storedFiles[i].name === file) {
                storedFiles.splice(i, 1);
                break;
            }
        }
        var tmpFileList = new DataTransfer();
        storedFiles.forEach(function (file) {
            tmpFileList.items.add(file);
        });
        fileslist_ = tmpFileList;
        $("#additional_picture")[0].files = fileslist_.files;
    }

    $(".image-preview-box")
        .filter('[data-file="' + file + '"]')
        .remove();
}

function otherImageHtml(e, f, index) {
    return `<div class="col-3 mb-2 d-flex align-items-end image-preview-box" data-file="${f.name}">
                                <div class="display-img">
                                    <img src="${e.target.result}" data-original-src="${e.target.result}" id="multi_index_${index}" data-index="${index}"
                                        class="img-fluid img-block-" data-multi="yes">
                                        <a href="javascript:void(0)" class="text-danger del-icon">
                                        <i class="fa fa-times font-18 remove-image-preview" data-file="${f.name}"></i>
                                    </a>
                                </div>

                            </div>`;
}

