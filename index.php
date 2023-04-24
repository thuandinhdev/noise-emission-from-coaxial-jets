<HTML>

<HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <STYLE TYPE="text/css">
    BODY {
      font-family: Verdana, sans-serif, helvetica, arial;
      font-size: 13px;
      background-color: #FFFFFF;
    }

    TD {
      font-family: Verdana, sans-serif, helvetica, arial;
      font-size: 13px;
    }

    TH {
      font-family: helvetica, arial, sans-serif;
      font-size: 12pt;
    }

    .error {
      font-weight: bold;
      background: #EEEEE0;
      color: purple;
    }

    .fail {
      font-weight: bold;
      background: #EEEEE0;
      color: red;
    }

    .unexpected-pass {
      font-weight: bold;
      background: #EEEEE0;
      color: #FFB200;
    }

    .unknown {
      font-weight: bold;
      background: #EEEEE0;
      color: red;
    }

    .expected-fail {
      font-weight: bold;
      background: #EEEEE0;
      color: brown;
    }

    .pass {
      background: #EEEEE0;
    }

    .error-matrix {
      font-weight: bold;
      background: #e0a8e0;
      color: purple;
    }

    .fail-matrix {
      font-weight: bold;
      background: #ffa0a0;
      color: red;
    }

    .unexpected-pass-matrix {
      font-weight: bold;
      background: #FFF0B3;
      color: #FFB200;
    }

    .unknown-matrix {
      font-weight: bold;
      background: #EEEEE0;
      color: red;
    }

    .expected-fail-matrix {
      font-weight: bold;
      background: #F0D48A;
      color: brown;
    }

    .pass-matrix {
      background: #EEEEE0;
    }

    .header {
      background: #A6CAF0;
    }

    A:link {
      color: #001692;
    }

    A:visited {
      color: #001692;
    }

    A:hover {
      color: red;
    }

    .default {
      font-family: Verdana, sans-serif, helvetica, arial;
      font-size: 13px;
    }

    H1 {
      font-size: 18pt;
      font-weight: bold;
      color: #CC3333;
    }

    H2 {
      font-size: 14pt;
      font-weight: bold;
      color: #CC3333;
    }

    H3 {
      font-size: 10pt;
      font-weight: bold;
      color: #CC3333;
    }

    H4,
    H5,
    H6 {
      font-size: 10pt;
      font-weight: normal;
      color: #CC3333;
    }

    .h1 {
      font-size: 18pt;
      font-weight: bold;
      color: #CC3333;
    }

    .h2 {
      font-size: 14pt;
      font-weight: bold;
      color: #CC3333;
    }

    .h3 {
      font-size: 10pt;
      font-weight: bold;
      color: #CC3333;
    }

    .h4 {
      font-size: 10pt;
      font-weight: normal;
      color: #CC3333;
    }

    UL {
      list-style-type: circle;
    }

    PRE,
    SAMP,
    CODE,
    TT {
      font-family: Courier New, Monospaced;
    }
  </STYLE>
  <TITLE>TestSuite broadbandNoiseGoldstein.SegregatedSkeTest</TITLE>
</HEAD>

<BODY>
  <script language="javascript">
    ns4 = (navigator.appName.indexOf("Netscape") >= 0 && !document.getElementById) ? 1 : 0;
    ie4 = (document.all && !document.getElementById) ? 1 : 0;
    ie5 = (document.getElementById && document.all) ? 1 : 0;
    ns6 = (document.getElementById && navigator.appName.indexOf("Netscape") >= 0) ? 1 : 0;
    w3c = (document.getElementById) ? 1 : 0;

    wid = (ie4 || ie5) ? window.document.body.clientWidth - 20 : window.innerWidth - 36

    if (ns4) {
      document.write('<layer name="di1"></layer>')
    }
    else {
      document.write('<div id="di1" style="position:absolute;z-index:100"></div>')
    }

    outd = ""

    if (w3c) div1 = document.getElementById('di1')
    if (ie4) div1 = document.all['di1']
    if (ns4) div1 = document.layers['di1']

    function move_div(x, y) {
      if (isNaN(x + y)) return
      if (ns4) {
        div1.moveTo(x, y)
      }
      else {
        div1.style.left = x + 'px'; div1.style.top = y + 'px';
      }
    }

    function write_div(text) {
      if (ns4) {
        div1.document.open();
        div1.document.write(text);
        div1.document.close();
      } else {
        div1.innerHTML = text;
      }
    }

    function big(n) {
      ondiv = n
      write_div("<a href=javascript:void(0) onmouseout='big_hide()' onmouseover='ondiv=1'><img border=0 name=ib src=" + n + "></a>");
      move_div(x, y)
    }

    function big_hide() {
      ondiv = 0;
      t3 = window.setTimeout('big_hide2()', 100)
    }

    function big_hide2() {
      if (ondiv == 0) {
        write_div("");
        move_div(-1000, -1000)
      }
    }

    y = x = 0
    function dragIt(evt) {
      if (ie4 || ie5) {
        x = window.event.clientX + document.body.scrollLeft; y = window.event.clientY + document.body.scrollTop
      } else {
        x = evt.pageX; y = evt.pageY
      }
    }

    document.onmousemove = dragIt
    if (ns4) { document.captureEvents(Event.MOUSEMOVE) }

    function URLencode(sStr) {
      return escape(sStr).replace(/\+/g, '%2B').replace(/\"/g, '%22').replace(/\'/g, '%27').replace(/\//g, '%2F');
    }
  </script>
  <H2>Test Suite broadbandNoiseGoldstein.SegregatedSkeTest</H2>
  <HR>
  <P>
  <H3>Individual Tests:</H3>
  <TABLE width="95%" cellspacing="2" cellpadding="5" border="0">
    <TR valign="top" bgcolor="#A6CAF0">
      <TD width="18%"><B>Name</B></TD>
      <TD width="7%"><B>Status</B></TD>
      <TD width="60%"><B>Message</B></TD>
      <TD nowrap width="5%"><B>Time(ms)</B></TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testSetup</TD>
      <TD>pass</TD>
      <TD></TD>
      <TD>5986</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testPlayMacro</TD>
      <TD>pass</TD>
      <TD></TD>
      <TD>10281</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testPartialIterate</TD>
      <TD>pass</TD>
      <TD>{
        "testPartialIterate" : {
        "type" : "steady",
        "iteration" : 540,
        "max iterations" : 600,
        "criterions satisfied" : [ "Maximum Steps" ]
        }
        }

      </TD>
      <TD>38444</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testSaveAll</TD>
      <TD>pass</TD>
      <TD></TD>
      <TD>85</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testIterate</TD>
      <TD>pass</TD>
      <TD>{
        "testIterate" : {
        "type" : "steady",
        "iteration" : 600,
        "max iterations" : 600,
        "criterions satisfied" : [ "Maximum Steps" ]
        }
        }

      </TD>
      <TD>4047</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testResidualsPlot/ResidualsPlot.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testResidualsPlot/ResidualsPlot.png')"
          onmouseout="big_hide()">testResidualsPlot</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testResidualsPlot">pass</A></TD>
      <TD>CPU testing is enabled

      </TD>
      <TD>620</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testUVelocityProfile/u_componentProfile.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testUVelocityProfile/u_componentProfile.png')"
          onmouseout="big_hide()">testUVelocityProfile</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testUVelocityProfile">pass</A></TD>
      <TD>Velocity_0 profile: Discrepancy details: { Avg Min: 8.552e-01, Avg Max: 1.299e+02, Mean: 0.000e+00, Norm Mean:
        0.000e+00,
        Max: 0.000e+00, Norm Max: 0.000e+00 }; tolerance = 2.000e-02.

      </TD>
      <TD>1172</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testGoldsteinAcousticPowerProfile/Goldstein_AP_dBProfile.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testGoldsteinAcousticPowerProfile/Goldstein_AP_dBProfile.png')"
          onmouseout="big_hide()">testGoldsteinAcousticPowerProfile</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testGoldsteinAcousticPowerProfile">pass</A></TD>
      <TD>GoldsteinAcousticPowerDB profile: Discrepancy details: { Avg Min: 0.000e+00, Avg Max: 1.321e+02, Mean:
        0.000e+00, Norm
        Mean: 0.000e+00, Max: 0.000e+00, Norm Max: 0.000e+00 }; tolerance = 1.000e-01.

      </TD>
      <TD>477</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testContinuityConvergence/Continuity.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testContinuityConvergence/Continuity.png')"
          onmouseout="big_hide()">testContinuityConvergence</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testContinuityConvergence">pass</A></TD>
      <TD>
        "CPU Continuity" : {
        "trend" : {
        "discrepancy" : 0.0,
        "tolerance" : 0.02
        },
        "noise" : {
        "comparison" : 0.006363884,
        "baseline" : 0.006363884,
        "error" : 0,
        "tolerance" : 0.5
        },
        "filter cut-off" : 4.239136E-7,
        "period" : 30,
        "drop number" : 2,
        "drop array length" : 0,
        "samples" : 598
        }


      </TD>
      <TD>497</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testXMomentumConvergence/X_momentum.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testXMomentumConvergence/X_momentum.png')"
          onmouseout="big_hide()">testXMomentumConvergence</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testXMomentumConvergence">pass</A></TD>
      <TD>
        "CPU X-momentum" : {
        "trend" : {
        "discrepancy" : 0.0,
        "tolerance" : 0.02
        },
        "noise" : {
        "comparison" : 0.003215831,
        "baseline" : 0.003215831,
        "error" : 0,
        "tolerance" : 0.5
        },
        "filter cut-off" : 4.528896E-5,
        "period" : 30,
        "drop number" : 2,
        "drop array length" : 0,
        "samples" : 598
        }


      </TD>
      <TD>389</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testYMomentumConvergence/Y_momentum.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testYMomentumConvergence/Y_momentum.png')"
          onmouseout="big_hide()">testYMomentumConvergence</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testYMomentumConvergence">pass</A></TD>
      <TD>
        "CPU Y-momentum" : {
        "trend" : {
        "discrepancy" : 0.0,
        "tolerance" : 0.02
        },
        "noise" : {
        "comparison" : 0.002314338,
        "baseline" : 0.002314338,
        "error" : 0,
        "tolerance" : 0.5
        },
        "filter cut-off" : 2.46572E-5,
        "period" : 30,
        "drop number" : 2,
        "drop array length" : 0,
        "samples" : 598
        }


      </TD>
      <TD>388</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testTkeConvergence/Tke.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testTkeConvergence/Tke.png')"
          onmouseout="big_hide()">testTkeConvergence</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testTkeConvergence">pass</A></TD>
      <TD>
        "CPU Tke" : {
        "trend" : {
        "discrepancy" : 0.0,
        "tolerance" : 0.02
        },
        "noise" : {
        "comparison" : 2.322741E-4,
        "baseline" : 2.322741E-4,
        "error" : 0,
        "tolerance" : 0.5
        },
        "filter cut-off" : 2.082901E-4,
        "period" : 30,
        "drop number" : 2,
        "drop array length" : 0,
        "samples" : 598
        }


      </TD>
      <TD>382</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD><A
          href="#broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testTdrConvergence/Tdr.png"
          onmouseover="big('../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testTdrConvergence/Tdr.png')"
          onmouseout="big_hide()">testTdrConvergence</A></TD>
      <TD><A href="#broadbandNoiseGoldstein.SegregatedSkeTest.testTdrConvergence">pass</A></TD>
      <TD>
        "CPU Tdr" : {
        "trend" : {
        "discrepancy" : 0.0,
        "tolerance" : 0.02
        },
        "noise" : {
        "comparison" : 0.003882586,
        "baseline" : 0.003882586,
        "error" : 0,
        "tolerance" : 0.5
        },
        "filter cut-off" : 0.1991147,
        "period" : 30,
        "drop number" : 2,
        "drop array length" : 0,
        "samples" : 598
        }


      </TD>
      <TD>403</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testTearDown</TD>
      <TD>pass</TD>
      <TD>Client/Server process exited with code: 0;

      </TD>
      <TD>643</TD>
    </TR><A NAME="@name"></A>
    <TR valign="top" class="pass">
      <TD>testRestorable</TD>
      <TD>pass</TD>
      <TD></TD>
      <TD>19908</TD>
    </TR>
  </TABLE>
  </P>
  <H3>Output from tests:</H3>
  <P><A
      name="broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testResidualsPlot/ResidualsPlot.png"></A>
  <H5>testResidualsPlot:</H5><IMG
    src="/ResidualsPlot.png"></P>
  <P><A
      name="broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testUVelocityProfile/u_componentProfile.png"></A>
 
  <H5>testGoldsteinAcousticPowerProfile:</H5><IMG
    src="/Goldstein_AP_dBProfile.png">
  </P>
  <P><A
      name="broadbandNoiseGoldstein.SegregatedSkeTest.../../user/broadbandNoiseGoldstein.SegregatedSkeTest/testContinuityConvergence/Continuity.png"></A>
<p >The test case is tested under the condition that the second nozzles are 52 m/s. The line is 0.07 m from the axis.
      Reference, baseline, and comparison are experimental, analytical, and numerical results.
      The model and conditions can be referenced in the following documents:
      <p>[1] Juve D., Bataille J., Comte-Bellot G. (1978) Bruit de jets coaxiaux froids subsoniques, Journal de Mecanique Appliquee, Vol. 2, N. 3.</p>
      <p>[2] Bechara W., Lafon P., Bailly C., Candel S.M. "Application of a K-epsilon Turbulence Model to the Prediction of Noise for Simple and Coaxial Free Jets", Acoustical Society of America, Vol. 97, Issue 6, pp. 3518-3531</p></p>
    </BODY>

</HTML>
