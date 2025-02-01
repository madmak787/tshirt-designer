jQuery(document).ready(function() {
    canvas = new fabric.Canvas('canvas');
    setBG();
    initUndoRedo();

    // Change T-SHirt on Click
    jQuery(document).on('click', '.products a', function(e) {
        const imgURL = jQuery(this).find('img').attr('src');
        setBG(imgURL);
    });

    // Add Icon on Click
    jQuery(document).on('click', '.images a', function(e) {
        const imgURL = jQuery(this).find('img').attr('src');
        setIcon(imgURL);
    });

    // Image upload to canvas
    jQuery(document).on('change','.image-uploader input[type="file"]',function (event) {
        setImage(event);
    });

    // Add Text To Canvas
    jQuery('body').on('click', '#add-text', function(e) {
        e.preventDefault();
        var text = jQuery('#color_text').val();
        var color = jQuery('#color_picker').val();
        var font = jQuery('#font-dropdown').val() ?? 'Arial Black';
        var canvaText = new fabric.Text(text, {
            fontSize: 30,
            textAlign: 'center',
            originX: "center", 
            originY: "center", 
            fill: color,
            textColor: color,
            fontFamily: font
        });
        canvas.centerObject(canvaText);
        canvas.add(canvaText);
        canvas.renderAll();
    });

    // Initialize color picker
    jQuery("#color_picker").colorpicker({
        color:'#000000',
        parts: 'full',
        showOn: 'both',
        buttonColorize: true,
        showNoneButton: true,
        alpha: true,
        colorFormat: ['#HEX'],
        draggable:true,
        modal: true,
        okOnEnter: true,
        select: function(event, color) {
            jQuery('#color_picker').css({'color':color.formatted,'border-color':color.formatted}).val(color.formatted);
        },
        cancel: function(event, color) {
            jQuery('#color_picker').css({'color':color.formatted,'border-color':color.formatted}).val(color.formatted);
        },
    });
});


function setBG(URL = 'assets/img/products/1.png') {
    const newURL = siteURL + URL;
    fabric.Image.fromURL(newURL, function (img) {
        canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), { name: "bg", scaleX: canvas.width / img.width, scaleY: canvas.height / img.height });
        canvas.renderAll();
    });
}

function setIcon(URL) {
    const newURL = siteURL + URL;
    fabric.Image.fromURL(newURL, function (img) {
        canvas.add(img);
        canvas.renderAll();
    });
}

function setImage(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function (event) {
        var imgObj = new Image();
        imgObj.src = event.target.result;
        imgObj.onload = function () {
            var image = new fabric.Image(imgObj, { name: "image" });
            image.scaleToWidth(300);
            canvas.centerObject(image);
            // canvas.sendBackwards(image);
            canvas.add(image);
            canvas.renderAll();
        };
    };
    reader.readAsDataURL(file);
}

function deleteLayer() {
    const activeObject = canvas.getActiveObject(); // Get the selected object
    if (activeObject) {
        canvas.remove(activeObject); // Remove the selected object
    } else {
        alert('No object selected.');
    }
}

function initUndoRedo() {
    if(typeof canvas === 'undefined') {
        canvas.on("object:added", function () {
            if (!isRedoing) {
                h = [];
            }
            isRedoing = false;
        });
    }
}
var isRedoing = false;
var h = [];
function undo() {
    if (canvas._objects.length > 0) {
        h.push(canvas._objects.pop());
        canvas.renderAll();
    } else {
        if (confirm("Background will be removed. This Action Can't Be Undone.")) {
            resetCanvas();
        }
    }
}
function redo() {
    if (h.length > 0) {
        isRedoing = true;
        canvas.add(h.pop());
        canvas.renderAll();
    }
}
