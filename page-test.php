<?php get_header(); ?>
<style>
* {
  box-sizing: border-box;
}

.keyboard {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  padding: 10px 30px 30px;
  background-color: #f4f4f4;
  box-shadow: 3px 3px 5px #dadada, -3px -3px 5px #fff;
  border-radius: 5px;
}

.line {
  display: flex;
  width: 100%;
  position: relative;
}

.line.center {
  justify-content: center;
}

.line.first {
  margin-bottom: 30px;
}

.line.enter::before {
  content: "enter";
  position: absolute;
  box-sizing: border-box;
  right: 5px;
  top: 5px;
  width: calc(((100% - 150px) / 15) * 1.5);
  height: 108px;
  padding: 10px;
  background-color: #f4f4f4;
  box-shadow: 3px 3px 5px #dadada, -3px -3px 5px #fff;
  border-radius: 5px;
  color: #939393;
}


.line div {
  height: 50px;
  padding: 10px;
  margin: 5px;
  background-color: #f4f4f4;
  box-shadow: 3px 3px 5px #dadada, -3px -3px 5px #fff;
  border-radius: 5px;
  color: #939393;
}

.line.maker {
  justify-content: space-between;
  align-items: flex-end;
}

.line.maker p {
  color: #939393;
  padding: 0 0 10px;
  margin: 0;
}

.line.maker p span {
  font-weight: bold;
}

.line.maker p.logo {
  font-weight: bold;
  font-size: 38px;
  letter-spacing: -8px;
}

.line div:hover {
  box-shadow: inset 3px 3px 5px #dadada, inset -3px -3px 5px #fff;
}

.line .n-key {
  width: calc((100% - 150px) / 15);
}

.line .tab-key,
.line .caps-key {
  width: calc((((100% - 150px) / 15) * 1.5));
}

.line .shift-key,
.line .ctr-key {
  width: calc((((100% - 150px) / 15) * 2) + 10px);
}

.line .space-key {
  width: calc((((100% - 150px) / 15) * 4) + 30px);
}
</style>
<div class="keyboard-box">
    <div class="keyboard">
      <div class="line maker">
        <p class="logo">Gua</p>
        <p><span>g</span>ua <span>k</span>eyboard</p>
      </div>
      <div class="line first">
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
      </div>
      <div class="line">
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
      </div>
      <div class="line enter">
        <div class="tab-key">Tab</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
      </div>
      <div class="line">
        <div class="caps-key">Caps</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
      </div>
      <div class="line center">
        <div class="shift-key">Shift</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="shift-key">Shift</div>
      </div>
      <div class="line center">
        <div class="ctr-key">ctr</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="space-key">Space</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="n-key">A</div>
        <div class="ctr-key">ctr</div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
