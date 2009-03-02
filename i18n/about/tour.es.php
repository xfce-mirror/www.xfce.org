<h1>Un paseo visual por Xfce 4.6.0</h1>

<p>
La esperada versión 4.6.0 del entorno de escritorio de Xfce está por fin
disponible. Intentaremos resaltar algunas de las nuevas características que han sido
añadidas desde la última versión estable.
</p>

<h2>Experiencia de escritorio mejorada con Xfdesktop<a name="xfdesktop"></a></h2>

<p>Desde que se introdujeron los iconos de escritorio en Xfce 4.4, hay personas que han expresado
la necesidad de poder seleccionar varios iconos (área de selección). En
<b>Xfce 4.6</b>, el gestor <b>Xfdesktop</b> por fin implementa esta funcionalidad:
puede seleccionar varios iconos, moverlos, borrarlos, etc...</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-rubberbanding.png"
  alt="Selección múltiple de iconos" /></p>

<p>
<b>Xfce 4.6</b> ofrece un escritorio totalmente nuevo que le permite
manipular archivos igual que con el menú contextual del administrador de archivos <b>Thunar</b>, y
también abrir aplicaciones, salir de su sesión o acceder a la documentación de ayuda.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-menu.png" 
  alt="Nuevo menú de escritorio" /></p>

<h2>Panel <a name="panel"></a></h2>

<p>Muchos fallos existentes desde hace mucho han sido arreglados en el <b>panel de Xfce</b>,
particularmente para configuraciones de pantallas múltiples, pero esta nueva versión también trae
un conjunto mejorado de complementos del panel.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-panel-clock.png" 
  alt="Nuevo reloj binario" /></p>

<p>
El <b>complemento de reloj</b> ha sido reescrito para consumir menos recursos de sistema
y para corregir algunos fallos de visualización, pero también hay un nuevo modo de reloj para el geek
que hay en usted: ¡el reloj binario! El nuevo <b>complemento de área de notificación</b> le permite
ocultar iconos de notificación seleccionados para mantener limpia y legible el área de notificación. 
</p>

<h2>Nuevo mezclador de sonido <a name="sound-mixer"></a></h2>

<p>
El <b>mezclador de Xfce4</b> ha sido reescrito desde el principio para usar
<a href="http://www.gstreamer.net/">Gstreamer</a>. Esto nos permite soportar
más fácilmente varios sistemas de sonido, la interfaz de usuario está mejor acabada,
y ahora puede gestionar varias tarjetas de sonido distintas. Además, un complemento de panel
le permite configurar el sistema de sonido rápidamente usando la rueda del ratón.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-mixer.png" 
  alt="Nuevo mezclador de sonido" /></p>

<h2>Un gestor de sesión mejorado <a name="session-manager"></a></h2>

<p>
<b>Xfce 4.6</b> viene con un gestor de sesión mejorado: su sesión debería
iniciarse más rápido y la ventana de configuración ha sido rediseñado para facilitar la
gestión de aplicaciones conscientes de la sesión. Adicionalmente, el gestor de sesión
ahora reiniciará las aplicaciones que se hayan colgado de forma que
no se quedará sin escritorio, panel, gestor de ventana, etc., si se produce
un cuelgue.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-settings.png"
  alt="Ventana de configuración de sesión" /></p>

<p>
El gestor de sesión también incluye una nueva característica muy esperada: soporte para
<b>suspensión</b> e <b>hibernación</b> sin necesidad de instalar otros programas. La ventana de cierre de sesión
tiene ahora dos botones adicionales que ofrecen la posibilidad de suspender o hibernar su ordenador.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-logout.png" 
  alt="Ventana de cierre de sesión" /></p>

<h2>Gestor de ventanas <a name="window-manager"></a></h2>

<p>
Como de costumbre, <b>Xfwm4</b> ha madurado un poco durante este ciclo de publicación:
se han corregido muchos fallos, se ha añadido soporte para varias pantallas
y el rendimiento global ha sido mejorado</p>

<p>Además de otras nuevas características, <b>Xfwm4</b> es ahora capaz de
detectar ventanas que no responden y ofrece la posibilidad de acabar con ellas.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-net-ping.png" 
  alt="Ventana para finalizar aplicaciones que no responden" /></p>

<p>
También hay un nuevo <b>menú de acciones</b> que le permite mover y redimensionar
ventanas rápidamente, ponerlas encima o debajo de otras ventanas o a pantalla completa.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-menu.png" 
  alt="Nuevo menú de acciones" /></p>

<p>Una nueva operación de <b>relleno</b> ha sido implementada: se puede expandir una ventana
dada hasta ocupar el espacio disponible sin solaparse con otras ventanas adyacentes.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-fill-operation.png" 
  alt="Operación de relleno" /></p>

<p>El <b>compositor</b> ha sido optimizado para reducir el parpadeo de ventanas durante
las operaciones de redimensionado.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-resize.png" 
  alt="Redimensionado sin parpadeos" /></p>

<p>También se han añadido algunas <b>opciones ajustables</b>: por ejemplo, ahora puede
desactivar el parpadeo de ventanas cuando reciben un aviso de urgencia.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-tweaks.png" 
  alt="Nuevas opciones ajustables" /></p>

<h2>Administrador de archivos <a name="file-manager"></a></h2>

<p>
Ha habido muchas correciones de fallos y mejoras de rendimiento en <b>Thunar</b>.
Puede utilizar los botones de avanzar y retroceder del ratón (si existen) para navegar,
e incluye un nuevo complemento que le permite establecer una imagen como fondo de escritorio desde
el menú contextual.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-wallpaper-plugin.png" 
  alt="Establecer una imagen como fondo de escritorio con Thunar" /></p>

<p><b>Thunar</b> sigue ahora las especificaciones de
<a href="http://freedesktop.org/wiki/Software/xdg-user-dirs">
directorios de usuario de XDG</a>.
Esto le permite tener direcorios de usuario con temas y localización regional para
almacenar su música, documentos, vídeos, plantilla, etc...
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-xdg-user-dirs.png" 
  alt="Menú de Thunar para el directorio de usuario" /></p>

<p>
<b>Thunar</b> muestra ahora iconos translúcidos para unidades o volúmenes que
no estén montados para que pueda distinguirlos.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-mounting.png" 
  alt="Iconos translúcidos para unidades o volúmenes sin montar" /></p>

<p> Y por último, pero no por ello menos importante, ¡<b>Thunar</b> soporta ahora dispositivos cifrados! </p>

<p class="image"><img src="/images/about/tour/4.6/thunar-encrypted.png" 
  alt="Soporte de Thunar para dispositivos cifrados" /></p>

<h2>Nuevas ventanas de configuración <a name="configuration-dialogs"></a></h2>

<p>
Xfce 4.6 ofrece una nueva interfaz de configuración, el <b>gestor de configuración de Xfce</b>,
que le permite configurar su entorno de escritorio más fácilmente
que antes. Los diálogos que son accesibles mediante un clic simple sobre los iconos
han sido diseñados para ser más compactos y permitirle personalizar su
escritorio rápidamente y de una manera más intuitiva.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-settings-manager.png" 
  alt="Gestor de configuración de Xfce" /></p>

<h3>Configuración de accesibilidad <a name="accessibility"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-accessibility-settings.png" 
  alt="Ventana de configuración de accesibilidad" /></p>

<p>
La ventana de <b>configuración de accesibilidad</b> le permite configurar las opciones
de accesibilidad relacionadas con el ratón y el teclado, tales como las teclas persistentes, el rechazo de teclas o
la emulación del ratón.
</p>

<h3>Configuración de apariencia <a name="appearance"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-appearance-settings.png" 
  alt="Ventana de configuración de apariencia" /></p>

<p>
La ventana de <b>configuración de apariencia</b> le permite configurar el estilo de los controles, el
tema de iconos, el tipo de letra, la barra de herramientas y el menú de opciones.
</p>

<h3>Configuración de pantalla <a name="display"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-display-settings.png" 
  alt="Ventana de configuración de pantala" /></p>

<p>La ventana de <b>configuración de pantalla</b> le permite configurar la resolución,
frecuencia de refresco y rotación para cada pantalla que esté conectada.</p>

<h3>Configuración de teclado <a name="keyboard"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-keyboard-settings-layout.png" 
  alt="Ventana de configuración de teclado, pestaña de distribución" /></p>

<p>La ventana de <b>configuración del teclado</b> le permite configurar las preferencias de teclado
tales como la repetición de teclas, los atajos de teclado y la distribución del teclado.
</p>

<p class="image">
  <img src="/images/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png" 
  alt="Ventana de configuración de teclado, pestaña de atajos" /></p>

<p>
Ahora puede configurar los atajos más fácilmente y cualquier conflicto es
detectado automáticamente.
</p>

<h3>Configuración del ratón <a name="mouse"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-mouse-settings.png" 
  alt="Ventana de configuración del ratón" /></p>

<p>
La ventana de <b>configuración del ratón</b> le permite configurar los diferentes ratones
conectados a su ordenador: orden de botones, aceleración, velocidad de doble clic,
tema del cursor de ratón, etc...
</p>

<h3>Configuración del escritorio <a name="desktop-settings"></a></h3>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-settings.png" 
  alt="Ventana de configuración del escritorio" /></p>

<p>
La ventana de <b>configuración del escritorio</b> es ahora mucho más compacta. Le permite
configurar opciones independientes en cada pantalla: fondo, brillo, menú de escritorio, iconos
mostrados, etc...</p>

<h2>Nuevo buscador de aplicaciones <a name="appfinder"></a></h2>

<p>
<b>Xfce 4.6</b> también viene con un buscador de aplicaciones totalmente nuevo con
una interfaz de usuario más ordenada. También es más fácil de usar con el teclado y
monitoriza las aplicaciones instaladas para actualizar la lista "al vuelo". También le
permite crear lanzadores de panel rápidamente arrastrando un icono de aplicación
a la ventana de creación de lanzadores.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-appfinder.png" 
  alt="Nuevo buscador de aplicaciones" /></p>

<h2>Enlaces<a name="links"></a></h2>

<ul>
  <li><a href="http://www.xfce.org/">Sitio web de Xfce</a></li>
  <li><a href="http://thunar.xfce.org/">Sitio web de Thunar</a></li>
</ul>

<h2>Créditos<a name="credits"></a></h2>

<ul>
  <li>Escrito por Jérôme Guelfucci (febrero 2009) </li>
  <li>Capturas de pantalla por Jannis Pohlmann </li>
</ul>

