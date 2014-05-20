function addRow(){
  var table = document.getElementById('ctr_table');
  var tbody = table.tBodies[0];
  var tr = tbody.insertRow( tbody.rows.length );
  var td_1 = tr.insertCell(0);
  td_1.innerHTML = "<input type=\"text\" required=\"required\" placeholder=\"单击填写内容\" name=\"title[]\" value=\"\"><input type=\"hidden\" name=\"id[]\" value=\"0\"/>";
  var td_2 = tr.insertCell(1);
  td_2.innerHTML = "<select name=\"type[]\"><option value=\"0\" selected='selected'>文本</option><option value=\"1\" >数值</option></select>";
  var td_3 = tr.insertCell(2);
  td_3.innerHTML = "<button class=\"btn btn-xs btn-danger\" onclick=\"removeRow(this.parentNode)\"><i class=\"icon-trash bigger-120\"></i></button>";
}

function addInfoRow(){
  var table = document.getElementById('info_table');
  var tbody = table.tBodies[0];
  var td_count = table.rows[0].cells.length;
  var tr = tbody.insertRow( tbody.rows.length );
  for( var i = 0; i < td_count - 1; ++ i ){
    //alert( table.rows[1].cells[i].firstChild.attributes['name'] );
    //var name = table.rows[1].cells[i].firstChild.attributes['name'].value ;
    var name = "content[]";
    var td = tr.insertCell( i );
    var content = table.rows[0].cells[i].innerText;
    //alert( "<input type=\"text\" name = \""+ name = "\"/>"
    td.innerHTML = "<input type=\"text\" name = \""+ name + "\" placeholder=\""+ content +"\" required=\"required\"/>";
    
  }
  var td = tr.insertCell( td_count - 1 );
  var stu_id_HTML = "<input type=\"hidden\" name=\"stu_id[]\" value=\"0\"/>";
  td.innerHTML = "<button class=\"btn btn-xs btn-danger\" onclick=\"removeRow(this.parentNode)\"><i class=\"icon-trash bigger-120\"></i></button>" + stu_id_HTML;
  
}

function removeRow(r){ 

  var  index=r.parentNode.rowIndex;  
  var table = r.parentNode.parentNode;
  //if(the_cell==null)  return;  

  //if(the_table.rows.length==1)  return;  

  table.deleteRow(index - 1);  
  //var root = r.parentNode;
  //root.deleteRow(r);
}

