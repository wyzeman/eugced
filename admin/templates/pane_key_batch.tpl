<form class="pure-form pure-form-aligned" method="POST" action="keys.php">
    <fieldset>

        <div class="pure-control-group">
        <label for="id_campaign">{t}Campaign{/t}:</label>
        <select name="id_campaign" id="id_campaign">
            {section name=c loop=$campaigns}

                <option value="{$campaigns[c].id}">{$campaigns[c].name}</option>

            {/section}
        </select>
        </div>

        <div class="pure-control-group">
        <label for="batch_keys">{t}One key per line{/t}:</label>

        <textarea id="batch_keys" name="batch_keys" style="width:820px;height:640px;font-size:12px"></textarea>
        </div>

        <div class="pure-controls">
        <button type="submit" class="pure-button pure-button-primary">{t}Add Keys{/t}</button>
        </div>
    </fieldset>
</form>