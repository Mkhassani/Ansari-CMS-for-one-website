<!doctype html>
<html>
<head>

 <script src="<?php echo base_url()?>ajaxupload/jquery.min.js"></script>
 <script src="<?php echo base_url()?>ajaxupload/custom.js"></script>
 <script src="<?php echo base_url()?>ajaxupload/ajaxfileupload.js"></script>
</head>
<body>
 <h1>Upload File</h1>
 <form method="post" action="" id="upload_file">
 <label for="userfile">File</label>

 <input type="file" name="userfile" id="userfile" size="20" />
 <input type="submit" name="submit" id="submit" />
 </form>
 <h2>Files</h2>
 <div id="files"></div>
</body>
</html>