<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript - Drag and Drop Demo</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style type="text/css">
    body {
      font-family: "Benton Sans", "Helvetica Neue", helvetica, arial, sans-serif;
      margin: 2em;
    }
    
    .container {
      /* margin-left: 200px;
      margin-right: 200px;
      margin-top: 100px; */
      /* display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 10px; */
    }
    
    .box {
      border: 3px solid #666;
      background-color: #ddd;
      padding: 10px;
      cursor: move;
      height: 50px;
      text-align: center;
      margin-bottom: 5px;
      margin-left: 2px;
    }

    table > :not(caption) > * > * {
      padding: 0 !important;
    }
    .table-bordered > :not(caption) > * {
      border-width: 0;
    }

    table{
      table-layout: fixed;
      width: 100%;
  }

    td {
        overflow: hidden;
        width: 100px;
    }
    
    .box.over {
      border: 3px dotted #666;
    }
    
    [draggable] {
      user-select: none;
    }
  </style>
  <script src="dnd.js"></script>
</head>

<body>

  <div class="container mt-5">
    <table class="table table-bordered">
      <tbody>
          <tr class="row"><?php echo ($rows[0]->page_title); ?> </tr>
      </tbody>
    </table>
    <div class="mt-5">
      <label for="exampleColorInput" class="form-label">Change Color</label>
      <input type="color" class="form-control form-control-color" id="colorpicker" value='<?php echo $rows[0]->page_color; ?>' title="Choose your color">
    </div>
  </div>
</body>
<script>
  let colorpicker = document.getElementById('colorpicker');
  setInterval(() => {
    let color = colorpicker.value;
    // $(".box").css("background-color", color);
    $(".box").css("color", color);
  }, 200);
</script>
<script type="text/javascript">
  
  document.addEventListener('DOMContentLoaded', (event) => {
      var dragSrcEl = null;
      
      function handleDragStart(e) {
        this.style.opacity = '0.4';
        
        dragSrcEl = this;
        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/html', this.innerHTML);
      }
    
      function handleDragOver(e) {
        if (e.preventDefault) {
          e.preventDefault();
        }
    
        e.dataTransfer.dropEffect = 'move';
        
        return false;
      }
    
      function handleDragEnter(e) {
        this.classList.add('over');
      }
    
      function handleDragLeave(e) {
        this.classList.remove('over');
      }
    
      function handleDrop(e) {
        if (e.stopPropagation) {
          e.stopPropagation(); // stops the browser from redirecting.
        }
        
        if (dragSrcEl != this) {
          dragSrcEl.innerHTML = this.innerHTML;
          this.innerHTML = e.dataTransfer.getData('text/html');
        }
        return false;
      }
    
      function handleDragEnd(e) {
        this.style.opacity = '1';
        var array = [];
        items.forEach(function (item) {
          item.classList.remove('over');
          // console.log(item.parentElement.outerHTML);
          array.push(item.parentElement.outerHTML);
        });
        var updatedContent = array.toString();
        var updatedContent = updatedContent.replace(/,/g, '');
        //console.log(updatedContent);
        var color = $("#colorpicker").val();

        $.ajax({
            url: "{{url('update')}}"+'/1',
            method: "POST",
            data: {
              "_token": "{{ csrf_token() }}",
              updatedContent: updatedContent,
              color : color,
            },
            success: function(data) {
              // console.log(data);
            }
        });
      }
      
      
      let items = document.querySelectorAll('.container .box');
      items.forEach(function(item) {
        item.addEventListener('dragstart', handleDragStart, false);
        item.addEventListener('dragenter', handleDragEnter, false);
        item.addEventListener('dragover', handleDragOver, false);
        item.addEventListener('dragleave', handleDragLeave, false);
        item.addEventListener('drop', handleDrop, false);
        item.addEventListener('dragend', handleDragEnd, false);
      });
    });
</script>

</html>