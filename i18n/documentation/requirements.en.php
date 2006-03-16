<h1>System requirements for Xfce</h1>

<p><strong>Building Xfce 4 modules depends on:</strong></p>

<ul>
    <li>pkgconfig , a system for managing library compile/link flags that works with automake and autoconf.</li>
    <li>GTK+ >= 2.2 (also dev packages), the GIMP multi-platform toolkit designed for creating graphical user interfaces.</li>
    <li>libxml2, a XML C library developed for the Gnome project.</li>
    <li>libdbh, the "Disk based hashtables" library, is needed for xffm, the file manager.</li>
</ul>
<p>Make sure you have these packages (and their *-devel packages) installed.</p>

<p><strong>Optional dependencies:</strong><p>
<ul>
    <li>librsvg >= 2.2.x, a SAX-based renderer library for SVG files, that has to be installed if you want to use SVG icons for the panel.</li>
    <li>libstartup-notification >= 0.5, a library that has to be installed if you want to use the startup notification feature.</li>
</ul>