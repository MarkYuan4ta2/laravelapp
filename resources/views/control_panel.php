<div style="padding: 10px;">
    <div style="margin: 10px;">
        <button onclick="submit_code()" class="btn btn-info" style="">提交</button>
    </div>
    <div style="margin: 10px;width:40%;float: left;">
        <label>编辑器主题选择</label>
        <select name="theme" id="theme" onchange="themes(this.value);">
            <option value="eclipse">eclipse</option>
            <option value="chaos">chaos</option>
            <option value="github">github</option>
            <option value="monokai">monokai</option>
            <option value="twilight">twilight</option>
            <option value="terminal">terminal</option>
            <option value="xcode">xcode</option>
        </select>
    </div>
    <div style="margin: 10px;width:40%;float: left;">
        <label>编程语言选择</label>
        <select name="language" id="language" onchange="languages(this.value);">
            <option value="c_cpp">C/C++</option>
            <option value="javascript">Javascript</option>
            <option value="python">Python</option>
            <option value="php">PHP</option>
            <option value="swift">Swift</option>
        </select>
    </div>
    <div style="margin: 10px;width:40%;float: left;">
        <label>字体大小选择</label>
        <input type="range" name="font_size" id="font_size" value="15" min="0" max="30" onchange="set_font_size(this.value);">
    </div>
</div>