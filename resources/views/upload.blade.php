<h1>File Upload Page</h1>
<form action="file" method="POST" enctype="multipart/form-data">
    @csrf
 <input type="file" name="file" ><br><br>
 <button type="submit">Upload</button>
</form>
