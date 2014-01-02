<fieldset>
    <legend>Lựa chọn</legend>
    <div class="field_select" id="pgstore_id" style="width:30%">

        <select name="pgstore_id"  style="width:80%;display: inline-block" data-placeholder="Cửa hàng" multiple>
            <option value="all">Tất cả</option>
            <? foreach($aStore as $store):?>
                <option value="<?=$store->id?>"><?=$store->pglong_name?></option>
            <? endforeach;?>
        </select>

    </div>
    <div class="field_select" id="pgtype" style="width:20%">

        <select name="pgtype"  style="width:80%;display: inline-block" data-placeholder="Xuất/nhập ">
            <option value="all">Tất cả Xuất/nhập</option>
            <option value="xuat">Xuất</option>
            <option value="nhap">Nhập</option>
        </select>

    </div>
    <input type="text" name="pgdatefrom" id="pgdatefrom" placeholder="Từ ngày" style="width:15%">
    <input type="text" name="pgdateto" id="pgdateto" placeholder="Đến ngày" style="width:15%">
    <div class="btn btn-small">
        <input type="button" value="Xem" onclick="viewreport()">
    </div>
    <div class="clearfix"></div>
    <div id="checkfield">
         <span style="display: inline-block;">
        <input type="checkbox" name="pgname" id="pgname" checked="checked">
        <label for="pgname">Tên thiết bị</label>
            </span>
         <span style="display: inline-block;">
        <input type="checkbox" name="pgcode" id="pgcode" checked="checked">
        <label for="pgcode">Mã thiết bị</label>
            </span>
         <span style="display: inline-block;">
        <input type="checkbox" name="pgprice" id="pgprice" checked="checked">
        <label for="pgprice">Giá</label>
            </span>
        <span style="display: inline-block;">
        <input type="checkbox" name="pgyear" id="pgyear">
        <label for="pgyear">Năm sx </label>
            </span>
        <span style="display: inline-block;">
        <input type="checkbox" name="pgcountry" id="pgcountry">
        <label for="pgcountry">Nước sx </label>
            </span>
        <span style="display: inline-block;">
        <input type="checkbox" name="pgcolor" id="pgcolor">
        <label for="pgcolor">Màu</label>
            </span>

    </div>

</fieldset>
<fieldset>
    <legend>Báo cáo</legend>
    <div id="list"></div>
</fieldset>
<script>
function viewreport(){
    $("#list").load("<?=base_url()?>admin/reportxnt?pgstore_id="+$("select[name=pgstore_id]").chosen().val()+
    "&pgtype="+$("select[name=pgtype]").chosen().val()+
    "&pgdatefrom="+$("input[name=pgdatefrom]").val()+
    "&pgdateto="+$("input[name=pgdateto]").val()+
    "&pgname="+$("input[name=pgname]").prop("checked")+
    "&pgcode="+$("input[name=pgcode]").prop("checked")+
    "&pgprice="+$("input[name=pgprice]").prop("checked") +
    "&pgcountry="+$("input[name=pgcountry]").prop("checked") +
    "&pgcolor="+$("input[name=pgcolor]").prop("checked") +
    "&pgyear="+$("input[name=pgyear]").prop("checked")
    );
}
$(function(){
    $("input").customInput();

    $( "#pgdatefrom" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd"
    });
    $( "#pgdateto" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd"
    });
    $('select[name=pgstore_id]').chosen({width:"100%"});
    $('select[name=pgtype]').chosen({width:"100%"});

});
</script>