var xcShowCopyright=0;
var xcCore=1;
var xc_au=[],xc_en=[],xc_du={};
var xc_bd=xc_cw=xc_bo=xc_dn=null;
var xc_dc=xc_dd=xc_dj=0;
var xc_fh=-1;
var xc_bu=["","100%","50%","33%","25%","20%"];
var xc_eu=" CELLPADDING='0' CELLSPACING='4' BORDER='0'>";
var xc_ev=" CELLPADDING='0' CELLSPACING='0' BORDER='0' ALIGN='CENTER'>";
var xc_ew=" CELLPADDING='0' CELLSPACING='"+xcGridWidth+"' BORDER='0' ALIGN='CENTER'>";
var xc_ey="<TABLE"+xc_eu;
var xc_ez="<TABLE WIDTH=100%"+xc_ev;
var xc_fa="<TABLE WIDTH=100%"+xc_ev;
var xc_fb="<TABLE WIDTH=100%"+xc_ew;
var xc_ex="</TABLE>";
var xc_es="<TR VALIGN='TOP'>";
var xc_et="<TR ALIGN='CENTER' VALIGN='MIDDLE'>";
var xc_er="</TR>";
var xcCSSOpen='this.className="';
var xcCSSClose='"';
var xc_dm=null;
var xc_fc=/TR|TBODY|THEAD|TFOOT|TABLE/i;
var xcNav=navigator.userAgent.toLowerCase();
var xcIsMac=(xcNav.indexOf("mac")!=-1);
var xcIsOpera=(xcNav.indexOf("opera")!=-1);
var xcIsSafari=(xcNav.indexOf("safari")!=-1);
var xcIsKon=(xcNav.indexOf("konqueror")!=-1);
var xcIsIE=(!xcIsOpera&&!xcIsKon&&xcNav.indexOf("msie")!=-1);
var xcIsIE4=(xcIsIE&&xcNav.indexOf("msie 4")!=-1);
var xcIsIE5=(xcIsIE&&!xcIsIE4);var xcIsIE55=(xcIsIE&&xcNav.indexOf("msie 5.5")!=-1);
var xcIsIE6=(xcIsIE&&xcNav.indexOf("msie 6")!=-1);
var xcIsIE55up=(xcIsIE55||xcIsIE6);
var xcIsIEMac=xcIsIE&&xcIsMac;
var xcIsN4=(xcNav.indexOf('mozilla')!=-1&&xcNav.search(/msie|gecko|opera|spoofer|compatible|webtv|hotjava/)==-1);
var xcIsN6=(xcNav.indexOf("gecko")!=-1&&!xcIsSafari);
var xcIsO7=(xcNav.indexOf("opera")!=-1);
var xcIsK3=(xcIsKon&&navigator.appVersion.indexOf('Konqueror/3')!=-1);
var xcCalSafe=(xcIsN6||xcIsIE5||xcIsK3||xcIsO7||xcIsSafari)&&!xcIsN4&&!xcIsIE4;

function xc_fj() {
  return true
}
function xc_eb() {
  setTimeout("xc_de()", 100)
}
function xc_de() {
  for (var i = 0; i < xc_au.length; i++) {
    var dg = xc_au[i];
    if (dg.fm.style.visibility == "visible") {
      var l = xc_cc(dg.fn);
      if (l != null) {
        xc_dg(dg.fm, dg.dx + xc_cd(l), dg.dy + xc_ce(l))
      } else {
        xc_cm(i)
      }
    }
  }
  xc_dn()
}
function xc_ff(e) {
  if (xcIsIE || xcIsK3 || xcIsOpera) {
    xc_dc = event.clientX + (xcIsK3 ? 0 : (document.documentElement.scrollLeft || document.body.scrollLeft));
    xc_dd = event.clientY + (xcIsK3 ? 0 : (document.documentElement.scrollTop || document.body.scrollTop));
    event.cancelBubble = false
  } else {
    xc_dc = e.pageX;
    xc_dd = e.pageY;
    if (xcIsN6) {
      document.routeEvent(e)
    } else if (xcIsSafari) {
      event.cancelBubble = false
    }
  }
}
function xc_fi() {
  if (xc_fh < 0) {
    xc_fh = document.getElementsByTagName("SELECT").length + document.getElementsByTagName("OBJECT").length + document.getElementsByTagName("APPLET").length + document.getElementsByTagName("EMBED").length
  }
  return (xc_fh > 0)
}
function xc_cc(id) {
  return id == "" ? null : document.getElementById(id)
}
function xc_cd(l, fj) {
  if (xcIsIEMac) {
    if (xc_fc.test(l.tagName)) {
      fj = 1
    }
    var x = l.offsetLeft;
    if (l.tagName == "TD" && typeof(fj) == "undefined") {
      x += xc_cd(l.parentElement, 1)
    } else if (l.offsetParent) {
      x += xc_cd(l.offsetParent, fj)
    } else {
      x += isNaN(parseInt(document.body.style.marginLeft)) ? parseInt(document.body.leftMargin) : parseInt(document.body.style.marginLeft)
    }
    return x
  } else {
    return l.offsetLeft + (l.offsetParent ? xc_cd(l.offsetParent) : 0)
  }
}
function xc_ce(l, fj) {
  if (xcIsIEMac) {
    if (xc_fc.test(l.tagName)) {
      fj = 1
    }
    var x = l.offsetTop;
    if (l.tagName == "TD" && typeof(fj) == "undefined") {
      x += xc_ce(l.parentElement, 1)
    } else if (l.offsetParent) {
      x += xc_ce(l.offsetParent, fj)
    } else {
      x += isNaN(parseInt(document.body.style.marginTop)) ? parseInt(document.body.topMargin) : parseInt(document.body.style.marginTop)
    }
    return x
  } else {
    return l.offsetTop + (l.offsetParent ? xc_ce(l.offsetParent) : 0)
  }
}
function xc_fm(l, cb) {
  l.innerHTML = cb
}
function xc_dg(l, x, y) {
  l.style.top = y + "px";
  l.style.left = x + "px"
}
function xc_df(l, x, y) {
  l.style.top = (parseInt(l.style.top) + y) + "px";
  l.style.left = (parseInt(l.style.left) + x) + "px"
}
function xc_ek(l) {
  l.style.visibility = "visible"
}
function xc_cn(l) {
  l.style.visibility = "hidden"
}
function xc_cs() {
  var l = document.createElement("DIV");
  with (l.style) {
    position = "absolute";
    visibility = "hidden";
    left = "-1000px";
    top = "-1000px";
    zIndex = ++xcBaseZIndex
  }
  if (xcIsIE && !xcIsMac) {
    document.body.insertBefore(l, document.body.firstChild)
  } else {
    document.body.appendChild(l)
  }
  l.fp = null;
  if (xcIsIE55up && xc_fi() && !xcIsMac) {
    l.fp = document.createElement("IFRAME");
    l.fp.src = "javascript:false";
    with (l.fp.style) {
      position = "absolute";
      visibility = "hidden";
      left = "-1000px";
      top = "-1000px";
      width = "20px";
      height = "20px";
      zIndex = l.style.zIndex - 1;
      filter = "progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)"
    }
    document.body.insertBefore(l.fp, l);
    l.fp.hb = false
  }
  return l
}
function xc_bx(n) {
  return ((n < 10) ? "0" : "") + n
}
function xc_bp(y, m, d) {
  return xcWeekdayShortNames[(new Date(y, m, d)).getDay()]
}
function xc_cg() {
  var gc = {};
  for (var i = 0; i < xcMonthShortNames.length; i++) {
    gc[xcMonthShortNames[i].toLowerCase()] = i
  }
  return gc
}
function xc_cv(mon) {
  if (xc_cw == null) {
    xc_cw = xc_cg()
  }
  return xc_cw[mon.toLowerCase()] || 0
}
function xc_ca() {
  var eg = {};
  for (var i = 0; i < xcWeekdayShortNames.length - 1; i++) {
    eg[xcWeekdayShortNames[i].toLowerCase()] = i
  }
  return eg
}
function xc_bn(day) {
  if (xc_bo == null) {
    xc_bo = xc_ca()
  }
  return xc_bo[day.toLowerCase()] || 0
}
function xc_fd(hh, style, et, title) {
  return "<" + hh + " " + et + " " + (title ? "TITLE='" + title.replace(/'/g, '&#39;') + "' " : "") + (style ? "CLASS='" + style + "'" : "") + ">"
}
function xc_bb(style, et, title) {
  return xc_fd("DIV", style, et || "", title || "")
}
var xc_ba = "</DIV>";
function xcDIV(style, cb, et, title) {
  return xc_bb(style, et || "", title || "") + cb + xc_ba
}
function xc_eq(style, cb, width, et, title) {
  return "<TD" + (width != "" ? " WIDTH='" + width + "'" : "") + ">" + xcDIV(style, cb, et || "", title || "") + "</TD>"
}
function xc_em(a, b) {
  return a.order - b.order
}
function xc_br(fo) {
  return xc_au[fo]
}
function xc_bv(gv, hj, gu, el, fn, dx, dy, fz) {
  var dg = null;
  for (var i = 0; i < xc_au.length; i++) {
    if (xc_au[i].ic || xc_au[i].hj == hj && hj != null || xcMultiCalendar == 0 && xc_au[i].fz == 1) {
      dg = xc_au[i];
      dg.ic = false;
      break
    }
  }
  if (dg == null) {
    dg = new xc_as(xc_au.length);
    xc_au[xc_au.length] = dg
  } else {
    dg.gx()
  }
  dg.bz = xc_du[gv] || {};
  dg.hj = hj || null;
  dg.gu = gu || hj;
  dg.el = el || "";
  dg.fn = fn || "";
  dg.dx = dx || 0;
  dg.dy = dy || 0;
  dg.fz = fz;
  return dg
}
function xc_dv(gv, fx, av, value, fz) {
  if (typeof(xc_du[gv]) == "undefined") {
    xc_du[gv] = {}
  }
  if (typeof(xc_du[gv][fx]) == "undefined") {
    xc_du[gv][fx] = {}
  }
  if (fz == 0) {
    xc_du[gv][fx][av] = value
  } else if (fz == 1) {
    if (typeof(xc_du[gv][fx][av]) == "undefined") {
      xc_du[gv][fx][av] = []
    }
    xc_du[gv][fx][av][xc_du[gv][fx][av].length] = value
  } else if (fz == 2) {
    if (typeof(xc_du[gv][fx][av]) == "undefined") {
      xc_du[gv][fx][av] = ""
    }
    xc_du[gv][fx][av] += value
  }
}
function ae(f) {
  var dn = f || xcDateFormat;
  dn = dn.replace(/\\/g, '\\\\');
  dn = dn.replace(/\//g, '\\\/');
  dn = dn.replace(/\[/g, '\\\[');
  dn = dn.replace(/\]/g, '\\\]');
  dn = dn.replace(/\(/g, '\\\(');
  dn = dn.replace(/\)/g, '\\\)');
  dn = dn.replace(/\{/g, '\\\{');
  dn = dn.replace(/\}/g, '\\\}');
  dn = dn.replace(/\</g, '\\\<');
  dn = dn.replace(/\>/g, '\\\>');
  dn = dn.replace(/\|/g, '\\\|');
  dn = dn.replace(/\*/g, '\\\*');
  dn = dn.replace(/\?/g, '\\\?');
  dn = dn.replace(/\+/g, '\\\+');
  dn = dn.replace(/\^/g, '\\\^');
  dn = dn.replace(/\$/g, '\\\$');
  dn = dn.replace(/dd/gi, '\\d\\d');
  dn = dn.replace(/mm/gi, '\\d\\d');
  dn = dn.replace(/yyyy/gi, '\\d\\d\\d\\d');
  dn = dn.replace(/yy/gi, '\\d\\d');
  dn = dn.replace(/day/gi, '\\w\\w\\w');
  dn = dn.replace(/mon/gi, '\\w\\w\\w');
  return dn
}
function xc_by(f) {
  if (xc_bd == null) {
    xc_bd = new RegExp('^' + ae(f) + '$')
  }
  return xc_bd
}
function xc_cj(date, dn) {
  var y, m, d, ac = dn || xcDateFormat;
  var ik = ac.search(/yyyy/i);
  var fv = ac.search(/mm/i);
  var fu = ac.search(/mon/i);
  var di = ac.search(/dd/i);
  y = date.substring(ik, ik + 4) - 0;
  if (fv != -1) {
    m = date.substring(fv, fv + 2) - 1
  } else {
    m = xc_cv(date.substring(fu, fu + 3)) - 0
  }
  d = date.substring(di, di + 2) - 0;
  return [y, m, d]
}
function xc_bz(y, m, d, dn) {
  var ac = dn || xcDateFormat;
  ac = ac.replace(/yyyy/i, y);
  ac = ac.replace(/mm/i, xc_bx(m + 1));
  ac = ac.replace(/MON/, xcMonthShortNames[m].toUpperCase());
  ac = ac.replace(/mon/i, xcMonthShortNames[m]);
  ac = ac.replace(/dd/i, xc_bx(d));
  ac = ac.replace(/DAY/, xc_bp(y, m, d).toUpperCase());
  ac = ac.replace(/day/i, xc_bp(y, m, d));
  return ac
}
function xc_bt(d) {
  return (new Date(d.getFullYear(), d.getMonth(), 1)).getDay()
}
function xc_cr(d) {
  var gg = new Date(d.getFullYear(), d.getMonth() + 1, 1);
  gg.setTime(gg.getTime() - 86400000);
  return gg.getDate()
}
function xc_ck(y) {
  var io = y + "";
  return xcYearDigits[io.charAt(0)] + xcYearDigits[io.charAt(1)] + xcYearDigits[io.charAt(2)] + xcYearDigits[io.charAt(3)]
}
function xc_as(fo) {
  this.fo = fo;
  this.hj = null;
  this.gu = null;
  this.el = "";
  this.fn = "";
  this.dx = 0;
  this.dy = 0;
  this.fz = 1;
  this.hq = 0;
  this.il = 0;
  this.month = 0;
  this.week = 0;
  this.day = 0;
  this.date = 0;
  this.ic = false;
  this.fr = "";
  this.fm = xc_cs();
  this.fm.bb = this;
  if (xcIsIE55up && !xcIsMac) {
    this.fm.onmouseenter = xc_dy;
    this.fm.onmouseleave = xc_ei
  } else {
    this.fm.onmouseover = xc_dy;
    this.fm.onmouseout = xc_ei
  }
  this.bz = {};
  this.ff = xc_bw;
  this.ha = xc_ej;
  this.az = xc_ai;
  this.al = xc_ae;
  this.bu = xc_ax;
  this.dt = xc_bg;
  this.hc = xc_eo;
  this.gf = xc_db;
  this.ge = xc_da;
  this.bx = xc_cy;
  this.gx = xc_dz;
  this.gw = xc_dx;
  this.bv = xc_ay;
  this.fe = xcGet;
  this.ax = xc_ag;
  this.aj = xc_ac;
  this.ia = xc_fg;
  this.ba = xc_aj;
  this.am = xc_af;
  this.gz = xc_ec;
  this.ay = xc_ah;
  this.ak = xc_ad;
  this.bn = xc_at;
  this.be = xc_an;
  this.bq = xc_aw();
  this.bj = xc_aq;
  this.bp = xc_av;
  this.bm = xc_ar;
  this.bc = xc_al;
  this.bd = xc_am;
  this.eb = xc_bm;
  this.bi = xc_ap;
  this.bh = xc_ao;
  this.ah = xc_aa;
  this.ai = xc_ab
}
function xc_bw(fx, av) {
  return typeof(this.bz[fx]) != "undefined" ? this.bz[fx][av] || null : null
}
function xc_bg(date) {
  return false
}
function xc_eo(date) {
  var fi = null;
  for (var i = 0; i < xc_en.length; i++) {
    fi = xc_en[i](this, date);
    if (fi) {
      break
    }
  }
  return fi
}
function xc_ax(em) {
}
function xc_db(date) {
  return ""
}
function xc_da(date) {
  return ""
}
function xc_cy(date) {
  return ["", 1]
}
function xc_ai() {
}
function xc_ae() {
}
function xc_ej() {
  var dx = this.dx, dy = this.dy, l = xc_cc(this.fn);
  var dh = 0, gk = null, bo = xc_by(), bg = "";
  if (l != null) {
    dx += xc_cd(l);
    dy += xc_ce(l)
  } else {
    dx += xc_dc;
    dy += xc_dd
  }
  this.ax();
  bg = this.aj(this.fe() || this.el);
  if (this.fr == "") {
    this.fr = bg ? bg : getCurrentDate()
  }
  if (bg != "" && bo.test(bg)) {
    var gt = xc_cj(bg);
    gk = new Date(gt[0], gt[1], gt[2])
  } else {
    gk = new Date()
  }
  dh = gk.getDate();
  this.il = gk.getFullYear();
  this.month = gk.getMonth();
  this.bu(0);
  if (this.il != gk.getFullYear() || this.month != gk.getMonth()) {
    gk = new Date(this.il, this.month, 1);
    dh = 0
  }
  var h = this.fm;
  xc_dg(h, dx, dy);
  xc_fm(h, this.bj() + this.bc(gk, dh) + this.bi());
  h.style.zIndex = ++xcBaseZIndex;
  if (h.fp) {
    if (!h.fp.hb) {
      h.fp.style.width = h.offsetWidth + "px";
      h.fp.style.height = h.offsetHeight + "px";
      h.fp.hb = true
    }
    xc_dg(h.fp, dx, dy);
    h.fp.style.zIndex = h.style.zIndex - 1
  }
  this.az();
  if (h.fp) {
    xc_ek(h.fp)
  }
  xc_ek(h);
  this.al()
}
function xc_dz() {
  this.bv();
  this.hj = null;
  this.gu = null;
  this.el = "";
  this.fn = "";
  this.dx = 0;
  this.dy = 0;
  this.fz = 1;
  this.il = 0;
  this.month = 0;
  this.week = 0;
  this.day = 0;
  this.ic = false;
  this.fr = "";
  this.bz = {}
}
function xc_dx() {
  this.bv();
  if (this.hj && this.hj.blur) {
    this.hj.blur()
  }
  this.ic = true
}
function xc_ay() {
  if (this.hq) {
    clearTimeout(this.hq);
    this.hq = 0
  }
}
function xc_ah() {
}
function xc_ad() {
}
function xc_ec() {
  var date = new Date(this.il, this.month, 1);
  var dh = 0, af = null, bo = xc_by(), bg = "";
  this.ax();
  bg = this.aj(this.fe() || this.fr || this.el);
  if (bg != "" && bo.test(bg)) {
    var gt = xc_cj(bg);
    af = new Date(gt[0], gt[1], gt[2])
  } else {
    af = new Date()
  }
  if (af != null && af.getFullYear() == date.getFullYear() && af.getMonth() == date.getMonth()) {
    dh = af.getDate()
  }
  this.ay();
  xc_fm(this.fm, this.bj() + this.bc(date, dh) + this.bi());
  xc_ek(this.fm);
  this.ak()
}
function xc_ag() {
  beforeGetDateValue(this.gu, this.hj)
}
function xc_ac(date) {
  return afterGetDateValue(this.gu, this.hj, date)
}
function xc_cb(eu) {
  return eu ? getDateValue(eu) : ""
}
function xcGet() {
  return xc_cb(this.gu) || xc_cb(this.hj)
}
function xc_aj(date) {
  return beforeSetDateValue(this.gu, this.hj, date)
}
function xc_af(date) {
  afterSetDateValue(this.gu, this.hj, date)
}
function xc_fg(date) {
  if (this.hj) {
    setDateValue(this.hj, date)
  }
}
function xc_bm(style, cb, width, et) {
  return xc_eq(style, cb, width, et)
}
function xc_aa() {
  return ""
}
function xc_ab() {
  return ""
}
function xc_at() {
  return xc_ey + xc_es + "<TD>" + this.ah() + xc_bb(xcCSSPanel) + (xcIsIEMac ? xc_ey + xc_es + "<TD>" : "")
}
function xc_an() {
  return (xcIsIEMac ? "</TD>" + xc_er + xc_ex : "") + xc_ba + this.ai() + "</TD>" + xc_er + xc_ex
}
function xc_ei() {
  if (xcAutoHide && this.bb.fz == 1) {
    this.bb.hq = setTimeout("xc_cm(" + this.bb.fo + ")", xcAutoHide)
  }
}
function xc_dy() {
  if (xcAutoHide) {
    this.bb.bv()
  }
}
function xc_cz(cr, cp, cq, es, eq, er) {
  var s = "";
  if (cr || es) {
    s += (xcIsIE55up && !xcIsMac) ? " onmouseenter='" : " onmouseover='";
    if (cr) {
      s += xcCSSOpen + cr + xcCSSClose + ";"
    }
    if (es) {
      s += es
    }
    s += "' "
  }
  if (cp) {
    s += " onmousedown='" + xcCSSOpen + cp + xcCSSClose + "' "
  }
  if (eq) {
    s += " onclick='" + eq + "' "
  }
  if (cq || er) {
    s += (xcIsIE55up && !xcIsMac) ? " onmouseleave='" : " onmouseout='";
    if (cq) {
      s += xcCSSOpen + cq + xcCSSClose + ";"
    }
    if (cq) {
      s += er
    }
    s += "' "
  }
  return s
}
function xc_ak(fo) {
  var gn = "xc_di(" + fo + ",-1)", gh = "xc_di(" + fo + ",1)";
  var gm = "xc_dh(" + fo + ",-1)", gg = "xc_dh(" + fo + ",1)";
  var au = "", at = "";
  if (xcArrowSwitch[0] == 1) {
    var ar = xcCSSArrowYearPrev, aq = xcCSSArrowYearNext;
    au = xc_eq(ar[0], xcArrowYear[0], "", xc_cz(ar[1], ar[2], ar[0], "", gn, ""));
    at = xc_eq(aq[0], xcArrowYear[1], "", xc_cz(aq[1], aq[2], aq[0], "", gh, ""))
  }
  if (xcArrowSwitch[1] == 1) {
    var ap = xcCSSArrowMonthPrev, ao = xcCSSArrowMonthNext;
    au += xc_eq(ap[0], xcArrowMonth[0], "", xc_cz(ap[1], ap[2], ap[0], "", gm, ""));
    at = xc_eq(ao[0], xcArrowMonth[1], "", xc_cz(ao[1], ao[2], ao[0], "", gg, "")) + at
  }
  return [au, at]
}
function xc_ar() {
  var yy = xcYearPrefix + xc_ck(this.il) + xcYearSuffix, mm = xcMonthPrefix + xcMonthNames[this.month] + xcMonthSuffix;
  return xc_eq(xcCSSHead, xcHeadTagOrder == 1 ? mm + xcHeadSeparator + yy : yy + xcHeadSeparator + mm, xcHeadTagAdjustment == 1 ? "100%" : "")
}
function xc_av() {
  var as = ["", ""];
  if (xcArrowPosition == 0) {
    as = xc_ak(this.fo)
  }
  s = xc_bb(xcCSSHeadBlock) + (xcHeadTagAdjustment == 1 ? xc_fa : xc_ez) + xc_et;
  s += as[0];
  s += this.bm();
  s += as[1];
  s += xc_er + xc_ex + xc_ba;
  return s
}
function xc_aw() {
  var s = xc_bb(xcCSSWeekdayBlock) + xc_fb + xc_es;
  for (var i = xcWeekStart; i < xcWeekStart + 7; i++) {
    s += xc_eq(xcCSSWeekday, xcWeekdayDisplay[i], "")
  }
  s += xc_er + xc_ex + xc_ba;
  return s
}
function xc_aq() {
  return this.bn() + this.bp() + this.bq
}
function xc_am(date, dh) {
  var s = "", fo = this.fo, ei = xcCSSDay, ed = xcCSSDayCurrent;
  if (date < 0) {
    var bf = 'this.title="' + xcCalCopyright + '"';
    var bl = 'window.open("' + xcCalHome + '")';
    s = this.eb(ed[0], xcCopyrightDisplay, "", xc_cz(ed[1], ed[2], ed[0], bf, bl, ""))
  } else if (date == 0) {
    s = this.eb(xcCSSDayEmpty, xcDayContents[0], "")
  } else {
    var dt = this.dt(date), ci = this.hc(date);
    var es = this.gf(date), er = this.ge(date), ad = this.bx(date);
    var eq = ad[0] + (ad[1] ? "xc_ds(" + fo + "," + date + ");" : "");
    if (dt) {
      if (ci && ci[1]) {
        s = this.eb(ci[1], xcDayContentsDisabled[date], "")
      } else {
        s = this.eb(ei[3], xcDayContentsDisabled[date], "")
      }
    } else if (date == dh && xcShowCurrentDate) {
      s = this.eb(ed[0], xcDayContentsCurrent[date], "", xc_cz(ed[1], ed[2], ed[0], es, eq, er))
    } else if (ci) {
      s = this.eb(ci[0], xcDayContents[date], "", xc_cz(ei[1], ei[2], ci[0], es, eq, er))
    } else {
      s = this.eb(ei[0], xcDayContents[date], "", xc_cz(ei[1], ei[2], ei[0], es, eq, er))
    }
  }
  return s
}
function xc_al(date, dh) {
  var ec = 1, ev = xc_bt(date), fs = xc_cr(date);
  if (xcWeekStart > 0 && ev == 0) {
    ev = 7
  }
  var s = xc_bb(xcCSSDayBlock) + xc_fb;
  for (var i = 0; i < 6; i++) {
    this.week = i;
    s += xc_es;
    for (var j = xcWeekStart; j < xcWeekStart + 7; j++) {
      this.day = j;
      this.date = 0;
      if (i == 5 && j == xcWeekStart + 6 && xcShowCopyright) {
        s += this.bd(-1, dh)
      } else if (i * 7 + j < ev || ec > fs) {
        s += this.bd(0, dh)
      } else {
        this.date = ec;
        s += this.bd(ec++, dh)
      }
    }
    s += xc_er
  }
  s += xc_ex + xc_ba;
  return s
}
function xc_ao() {
  var s = "", fb = 0, fc = xcCSSFootToday, ex = xcCSSFootClear, ew = xcCSSFootBack, ey = xcCSSFootClose, fa = xcCSSFootReset;
  for (var i = 0; i < xcFootTagSwitch.length; i++) {
    if (xcFootTagSwitch[i]) {
      fb++
    }
  }
  if (fb > 0) {
    var fo = this.fo, hw = getCurrentDate(), el = xc_by().test(this.el) ? this.el : hw;
    var hx = "xc_ds(" + fo + ",0)", bw = "xc_az(" + fo + ")", aw = "xc_ef(" + fo + ")", by = "xc_cm(" + fo + ")", gy = "xc_ea(" + fo + ")";
    var ez = [{
      "order": xcFootTagSwitch[0],
      "en": xcFootTags[0],
      "bs": hx,
      "hy": "Today is " + hw,
      "de": fc[0],
      "df": fc[1],
      "dc": fc[2]
    }, {
      "order": xcFootTagSwitch[1],
      "en": xcFootTags[1],
      "bs": bw,
      "hy": "Clear the date input",
      "de": ex[0],
      "df": ex[1],
      "dc": ex[2]
    }, {
      "order": xcFootTagSwitch[2],
      "en": xcFootTags[2],
      "bs": aw,
      "hy": "Scroll to " + (this.fr || hw),
      "de": ew[0],
      "df": ew[1],
      "dc": ew[2]
    }, {
      "order": xcFootTagSwitch[3],
      "en": xcFootTags[3],
      "bs": by,
      "hy": "Close the calendar",
      "de": ey[0],
      "df": ey[1],
      "dc": ey[2]
    }, {
      "order": xcFootTagSwitch[4],
      "en": xcFootTags[4],
      "bs": gy,
      "hy": "Pick the default date of " + el,
      "de": fa[0],
      "df": fa[1],
      "dc": fa[2]
    }, {
      "order": xcFootTagSwitch[5],
      "en": hw,
      "bs": hx,
      "hy": "Today",
      "de": fc[0],
      "df": fc[1],
      "dc": fc[2]
    }, {
      "order": xcFootTagSwitch[6],
      "en": this.fr,
      "bs": aw,
      "hy": "Scroll to this date",
      "de": ew[0],
      "df": ew[1],
      "dc": ew[2]
    }, {
      "order": xcFootTagSwitch[7],
      "en": el,
      "bs": gy,
      "hy": "Pick the default date",
      "de": fa[0],
      "df": fa[1],
      "dc": fa[2]
    }].sort(xc_em);
    var as = ["", ""];
    if (xcArrowPosition == 1) {
      as = xc_ak(fo)
    }
    w = xcFootTagAdjustment == 1 ? xc_bu[fb > 5 ? 5 : fb] : "";
    s += xc_bb(xcCSSFootBlock) + (xcFootTagAdjustment == 0 ? xc_ez : xc_fa) + xc_et;
    s += as[0];
    for (var i = 0; i < ez.length; i++) {
      if (ez[i].order != 0) {
        s += xc_eq(ez[i].de, ez[i].en, w, xc_cz(ez[i].df, ez[i].dc, ez[i].de, "", ez[i].bs, ""), ez[i].hy)
      }
    }
    s += as[1];
    s += xc_er + xc_ex + xc_ba
  }
  return s
}
function xc_ap() {
  return this.bh() + this.be()
}
function xc_di(fo, dy) {
  var dg = xc_br(fo);
  dg.il += dy;
  dg.bu(dy);
  dg.gz()
}
function xc_dh(fo, dm) {
  var dg = xc_br(fo);
  dg.month += dm;
  if (dg.month < 0) {
    dg.month = 11;
    dg.il--
  }
  if (dg.month > 11) {
    dg.month = 0;
    dg.il++
  }
  dg.bu(dm);
  dg.gz()
}
function xc_az(fo) {
  var dg = xc_br(fo);
  dg.ba("");
  dg.ia("");
  dg.am("");
  dg.fr = "";
  if (dg.fz == 1 && !xcStickyMode) {
    xc_cm(fo)
  } else {
    dg.gz()
  }
}
function xc_ds(fo, date) {
  var dg = xc_br(fo);
  if (date == 0) {
    bg = getCurrentDate();
    var dz = xc_cj(bg);
    dg.il = dz[0];
    dg.month = dz[1];
    date = dz[2]
  }
  if (dg.dt(date)) {
    dg.gz();
    return
  }
  var bg = dg.ba(xc_bz(dg.il, dg.month, date));
  dg.ia(bg);
  dg.am(bg);
  dg.fr = bg;
  if (dg.fz == 1 && !xcStickyMode) {
    xc_cm(fo)
  } else {
    dg.gz()
  }
}
function xc_ef(fo) {
  var dg = xc_br(fo), d = xc_cj(dg.fr || getCurrentDate());
  dg.il = d[0];
  dg.month = d[1];
  dg.gz()
}
function xc_ea(fo) {
  var dg = xc_br(fo), d = xc_cj(xc_by().test(dg.el) ? dg.el : getCurrentDate());
  dg.il = d[0];
  dg.month = d[1];
  xc_ds(fo, d[2])
}
function xc_cm(fo) {
  var dg = xc_br(fo), h = dg.fm;
  if (dg.fz == 1) {
    if (h.fp) {
      xc_cn(h.fp)
    }
    xc_cn(h);
    dg.gw()
  }
}
function showCalendar(gv, hj, gu, el, fn, dx, dy, fz) {
  if (!xcCalSafe) {
    return
  }
  if (!xc_dj) {
    xc_dj = 1;
    xc_dn = window.onresize ? window.onresize : xc_fj;
    window.onresize = xc_eb
  }
  var dg = xc_bv(gv, hj, gu, el, fn, dx, dy, fz);
  dg.ha()
}
function toCalendarDate(date) {
  return xc_bz(date.getFullYear(), date.getMonth(), date.getDate())
}
var toCalDate = toCalendarDate;
function toJSDate(date) {
  var bo = xc_by();
  if (bo.test(date)) {
    var d = xc_cj(date);
    return (new Date(d[0], d[1], d[2]))
  } else {
    return (new Date())
  }
}
function getCurrentDate() {
  return toCalendarDate(new Date())
}
function checkDate(date) {
  if (date) {
    var bo = xc_by();
    if (bo.test(date)) {
      return 0
    } else {
      return 1
    }
  } else {
    return 2
  }
}
function compareDates(dj, dk) {
  var bo = xc_by();
  var d1 = getDateNumbers(bo.test(dj) ? dj : getCurrentDate()).join("");
  var d2 = getDateNumbers(bo.test(dk) ? dk : getCurrentDate()).join("");
  return (d1 == d2 ? 0 : d1 > d2 ? 1 : -1)
}
function getDateNumbers(date) {
  var bo = xc_by();
  if (bo.test(date)) {
    var d = xc_cj(date);
    return [xc_bx(d[0]), xc_bx(d[1] + 1), xc_bx(d[2])]
  } else {
    return ["", "", ""]
  }
}
var getNumbers = getDateNumbers;
function beforeGetDateValue(gu, hj) {
}
function afterGetDateValue(gu, hj, date) {
  return date
}
function getDateValue(eu) {
  return eu.value
}
function beforeSetDateValue(gu, hj, date) {
  return date
}
function afterSetDateValue(gu, hj, date) {
}
function setDateValue(eu, date) {
  eu.value = date
}
function xc_dw() {
  if (xcIsN6) {
    document.captureEvents(Event.MOUSEMOVE)
  }
  document.onmousemove = xc_ff;
  document.body.onmousemove = null;
  if (xc_dm) {
    xc_dm()
  }
}
if (xcCalSafe) {
  xc_dm = window.onload ? window.onload : function () {
  };
  window.onload = xc_dw;
  var fy = xcMods.sort(xc_em);
  for (var i = 0; i < fy.length; i++) {
    if (fy[i].order != 0) {
      document.write("<scr" + "ipt language='javascript' src='" + xcModPath + fy[i].script + "' hz='text/javascript'><\/scr" + "ipt>")
    }
  }
}
function beforeSetDateValue(ref_field, target_field, date)
{
  if (date!="")
  {
    var startDate=document.forms[0]["start_date"];
    var endDate=document.forms[0]["end_date"];
    if (target_field==endDate &&checkDate(getDateValue(startDate))==0 &&compareDates(getDateValue(startDate), date)>0)           {
      date=getDateValue(endDate);
      alert("End Date should not be earlier than Start Date, please select again.");
    }
  }
  return date;
}

function afterSetDateValue(ref_field, target_field, date)
{
  if (date!="")
  {
    var startDate=document.forms[0]["start_date"];
    var endDate=document.forms[0]["end_date"];
    if (target_field==startDate &&checkDate(getDateValue(endDate))==0 &&compareDates(date, getDateValue(endDate))>0)
    {
      setDateValue(endDate, date);
      alert("End Date was earlier than Start Date, it's now set to Start Date.");
    }
  }
}

function checkForm()
{
  var startDate=document.forms[0]["start_date"];
  var endDate=document.forms[0]["end_date"];
  if (checkDate(getDateValue(startDate))!=0)
  {
    alert("Please select a Start Date.");
  }
  else if (checkDate(getDateValue(endDate))!=0)
  {
    alert("Please select an End Date.");
  }
  else if (compareDates(getDateValue(startDate), getDateValue(endDate))>0)
  {
    alert("End Date should not be earlier than Start Date.");
  }
  else
  {
    alert("Dates are good.");
  }
}