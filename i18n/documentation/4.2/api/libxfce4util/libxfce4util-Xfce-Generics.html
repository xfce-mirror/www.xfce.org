<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>Xfce Generics</title><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="index.html" title="libxfce4util Reference Manual"><link rel="up" href="libxfce4util-datatypes.html" title="Xfce Data types"><link rel="prev" href="libxfce4util-datatypes.html" title="Xfce Data types"><meta name="generator" content="GTK-Doc V1.2 (XML mode)"><style type="text/css">
        .synopsis, .classsynopsis {
            background: #eeeeee;
            border: solid 1px #aaaaaa;
            padding: 0.5em;
        }
        .programlisting {
            background: #eeeeff;
            border: solid 1px #aaaaff;
            padding: 0.5em;
        }
        .variablelist {
            padding: 4px;
            margin-left: 3em;
        }
        .navigation {
            background: #ffeeee;
            border: solid 1px #ffaaaa;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }
        .navigation a {
            color: #770000;
        }
        .navigation a:visited {
            color: #550000;
        }
        .navigation .title {
            font-size: 200%;
        }
      </style></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle"><td><a accesskey="p" href="libxfce4util-datatypes.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td><td><a accesskey="u" href="libxfce4util-datatypes.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td><td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td><th width="100%" align="center">libxfce4util Reference Manual</th></tr></table><div class="refentry" lang="en"><a name="libxfce4util-Xfce-Generics"></a><div class="titlepage"></div><div class="refnamediv"><h2><span class="refentrytitle">Xfce Generics</span></h2><p>Xfce Generics &#8212; Generic data types and related functions.</p></div><div class="refsynopsisdiv"><h2>Synopsis</h2><pre class="synopsis">

#include &lt;libxfce4util/libxfce4util.h&gt;


#define     <a href="libxfce4util-Xfce-Generics.html#XFCE-GENERIC-STACK-CAPS">XFCE_GENERIC_STACK</a>              (Type)
#define     <a href="libxfce4util-Xfce-Generics.html#xfce-stack-new">xfce_stack_new</a>                  (StackType)
#define     <a href="libxfce4util-Xfce-Generics.html#xfce-stack-free">xfce_stack_free</a>                 (stack)
#define     <a href="libxfce4util-Xfce-Generics.html#xfce-stack-top">xfce_stack_top</a>                  (stack)
#define     <a href="libxfce4util-Xfce-Generics.html#xfce-stack-pop">xfce_stack_pop</a>                  (stack)
#define     <a href="libxfce4util-Xfce-Generics.html#xfce-stack-push">xfce_stack_push</a>                 (stack, value)
</pre></div><div class="refsect1" lang="en"><a name="id2550199"></a><h2>Description</h2><p>
This module provides generic data types - as known from the C++ standard
template library - for the brave C programmer. Since C does not provide
any template mechanism, these generics are completely based on C preprocessor
macros and the functions offer no type safety at all (though some common
mistakes will surely be caught by the C compiler).
</p><p>
</p><div class="example"><a name="id2550216"></a><p class="title"><b>Example 1. Using a generic stack</b></p><pre class="programlisting">
  typedef XFCE_GENERIC_STACK(int) IntStack;

  IntStack *stack = xfce_stack_new (IntStack);

  xfce_stack_push (stack, 0);
  xfce_stack_push (stack, 1);

  printf ("Top is <tt class="literal">d</tt>\n", xfce_stack_top (stack));

  xfce_stack_pop (stack);

  printf ("Top is <tt class="literal">d</tt>\n", xfce_stack_top (stack));

  xfce_stack_free (stack);
</pre></div><p>
</p></div><div class="refsect1" lang="en"><a name="id2550247"></a><h2>Details</h2><div class="refsect2" lang="en"><a name="id2550252"></a><h3><a name="XFCE-GENERIC-STACK-CAPS"></a>XFCE_GENERIC_STACK()</h3><a class="indexterm" name="id2550264"></a><pre class="programlisting">#define     XFCE_GENERIC_STACK(Type)</pre><p>
This macro is used to create a new stack data type which elements are of
<i class="parameter"><tt>Type</tt></i>. For example, to create a stack type that handles elements of type
<tt class="literal">double</tt>, you'd write the following
</p><pre class="programlisting">
typedef XFCE_GENERIC_STACK(double) MyDoubleStack;
</pre><p>
and furtheron refer to your stack type as <tt class="literal">MyDoubleStack</tt>.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>Type</tt></i> :</span></td><td>Data type of the elements that should be handled by the stack. Can
       be any valid data type from simple int's to complex structures.


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2550327"></a><h3><a name="xfce-stack-new"></a>xfce_stack_new()</h3><a class="indexterm" name="id2550338"></a><pre class="programlisting">#define     xfce_stack_new(StackType)</pre><p>
Creates a new instance of <i class="parameter"><tt>StackType</tt></i> and returns a pointer to the newly
created instance. For example, imagine you declared a type <tt class="literal">MyDoubleStack</tt>
as shown above, you can instantiate this type with
</p><pre class="programlisting">
MyDoubleStack *my_stack = xfce_stack_new (MyDoubleStack);
</pre><p>
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>StackType</tt></i> :</span></td><td>Type of stack declared with <a href="libxfce4util-Xfce-Generics.html#XFCE-GENERIC-STACK-CAPS"><span class="type">XFCE_GENERIC_STACK</span></a>.


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2550403"></a><h3><a name="xfce-stack-free"></a>xfce_stack_free()</h3><a class="indexterm" name="id2550413"></a><pre class="programlisting">#define     xfce_stack_free(stack)</pre><p>
Frees a stack, that was allocated using <a href="libxfce4util-Xfce-Generics.html#xfce-stack-new"><span class="type">xfce_stack_new</span></a>.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>stack</tt></i> :</span></td><td>A stack object.


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2550455"></a><h3><a name="xfce-stack-top"></a>xfce_stack_top()</h3><a class="indexterm" name="id2550466"></a><pre class="programlisting">#define     xfce_stack_top(stack)</pre><p>
Returns the top element from <i class="parameter"><tt>stack</tt></i>. Note that this function does not
pop the top element, it just returns it.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>stack</tt></i> :</span></td><td>


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2550507"></a><h3><a name="xfce-stack-pop"></a>xfce_stack_pop()</h3><a class="indexterm" name="id2550517"></a><pre class="programlisting">#define     xfce_stack_pop(stack)</pre><p>
Removes the top element from <i class="parameter"><tt>stack</tt></i>.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>stack</tt></i> :</span></td><td>


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2550557"></a><h3><a name="xfce-stack-push"></a>xfce_stack_push()</h3><a class="indexterm" name="id2550568"></a><pre class="programlisting">#define     xfce_stack_push(stack, value)</pre><p>
Pushes a new <i class="parameter"><tt>value</tt></i> on top of <i class="parameter"><tt>stack</tt></i>.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>stack</tt></i> :</span></td><td>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>value</tt></i> :</span></td><td>


</td></tr></tbody></table></div></div></div></div><table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle"><td align="left"><a accesskey="p" href="libxfce4util-datatypes.html"><b>&lt;&lt; Xfce Data types</b></a></td><td align="right"></td></tr></table></body></html>
