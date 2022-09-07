
<form action="proses.php?action=create" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td><label for="">Judul</label></td>
        <td><input type="text" name="judul" id=""></td>
    </tr>
    <tr>
        <td><label for="">description</label></td>
        <td><input type="text" name="desc" id=""></td>
    </tr>
    <tr>
        <td><label for="">Slug</label></td>
        <td><input type="text" name="slug" id="slug"></td>
    </tr>
    <tr>
        <td><label for="">Foto</label></td>
        <td><input type="file" name="foto"></td>
    </tr>
    <tr>
        <td><button type="submit" name="create" value="create">Submit</button></td>
    </tr>
</table>
</form>