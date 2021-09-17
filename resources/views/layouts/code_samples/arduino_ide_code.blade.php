<pre class="p-2">
<font color="#00979c">void</font> <font color="#5e6d03">setup</font><font color="#000000">(</font><font color="#000000">)</font> <font color="#000000">{</font>
<font color="#d35400">pinMode</font><font color="#000000">(</font><font color="#000000">8</font><font color="#434f54">,</font> <font color="#00979c">INPUT</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#d35400">pinMode</font><font color="#000000">(</font><font color="#000000">2</font><font color="#434f54">,</font> <font color="#00979c">OUTPUT</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#000000">}</font>

<font color="#00979c">void</font> <font color="#5e6d03">loop</font><font color="#000000">(</font><font color="#000000">)</font> <font color="#000000">{</font>
<font color="#00979c">int</font> <font color="#000000">mygtukas</font><font color="#434f54">=</font><font color="#d35400">digitalRead</font><font color="#000000">(</font><font color="#000000">8</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#5e6d03">if</font> <font color="#000000">(</font><font color="#000000">mygtukas</font><font color="#434f54">==</font><font color="#000000">1</font><font color="#000000">)</font><font color="#000000">{</font>
 &nbsp;<font color="#d35400">digitalWrite</font><font color="#000000">(</font><font color="#000000">2</font><font color="#434f54">,</font> <font color="#00979c">HIGH</font><font color="#000000">)</font><font color="#000000">;</font>
<font color="#000000">}</font>
<font color="#5e6d03">else</font><font color="#000000">{</font>
<font color="#000000">}</font>
<font color="#000000">}</font>
</pre>