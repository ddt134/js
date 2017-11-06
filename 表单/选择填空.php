<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否是核销点</label>
    <div class="col-sm-9 col-xs-12">
        <label class="radio-inline"><input type="radio" name="is_store" value="0" {if $level['is_store'] == 0 }checked="checked"{/if} > 关闭</label>
        <label class="radio-inline"><input type="radio" name="is_store" value="1" {if $level['is_store'] == 1 }checked="checked"{/if}> 开启</label>
        <span class="help-block">用户升级到这个等级后是否设置为核销点</span>
    </div>
</div>

<div id="verifyContainer">
    <div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 control-label">核销佣金</label>
        <div class="input-group col-sm-9 col-xs-12">
            <input type="text" name="verify_rate" class="form-control" value="{$level['verify_rate']}" />
            <div class='input-group-addon'>%</div>
            <input type="text" name="verify_money" class="form-control" value="{$level['verify_money']}" />
            <div class='input-group-addon'>元</div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 control-label">团队佣金</label>
        <div class="input-group col-sm-9 col-xs-12">
            <input type="text" name="team_rate" class="form-control" value="{$level['team_rate']}" />
            <div class='input-group-addon'>%</div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var isStore="{$level['is_store']}";
    toggleVerifyContainer();
    $("input[name='is_store']").bind('click',toggleVerifyContainer);
    function toggleVerifyContainer(){
        ($("input[name='is_store']:checked").val()==1)?$('#verifyContainer').show():$('#verifyContainer').hide();
    }
</script>