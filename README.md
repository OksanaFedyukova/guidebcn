# Informe del Proyecto Web en WordPress

[Guide BCN - Sitio Web](https://www.guidebcn.com/)

## 1. Introducción

![Vista general de la página principal](/imagenes\Screenshot 2024-11-03 171804.png)

Este proyecto consiste en una guía accesible de Barcelona, organizada con categorías para mostrar contenido específico. El objetivo del sitio es crear una experiencia de usuario optimizada, con un diseño responsivo y accesible que usa una paleta de colores neutros en tonos grises.

## 2. Desarrollo del Tema Personalizado

![Estructura de archivos del tema](ruta/a/tu/imagen-estructura-archivos.jpg)

El tema personalizado incluye archivos como `functions.php`, `index.php`, `header.php`, `footer.php`, `category-places.php`, `category-museums.php`, y `style.css`. Cada archivo desempeña una función específica dentro del tema para ofrecer una estructura coherente y funcional. El diseño usa una paleta de colores en tonos grises para brindar una apariencia neutral y profesional. Además, se ha optimizado el sitio para dispositivos móviles y tabletas.

## 3. Plantillas de Categorías

![Diseño de la categoría Places](ruta/a/tu/imagen-category-places.jpg)
![Diseño de la categoría Museums](ruta/a/tu/imagen-category-museums.jpg)

El proyecto incluye dos plantillas personalizadas:
- **Plantilla "Category - Places"** (`category-places.php`): Muestra los posts de esta categoría en una lista que incluye imágenes destacadas, extractos y un botón "Leer más".
- **Plantilla "Category - Museums"** (`category-museums.php`): Similar a la plantilla "Places", pero adaptada para contenido relacionado con museos. Ambas plantillas mantienen una estructura visual coherente para una mejor experiencia de usuario.

## 4. Funcionalidades Adicionales

![Navegación y menú en dispositivos móviles](ruta/a/tu/imagen-menu.jpg)

El tema habilita soporte para miniaturas de imagen en posts a través de `add_theme_support('post-thumbnails')`. Además, se ha definido un tamaño personalizado de miniaturas con `add_image_size('custom-size', 300, 200, true)` para consistencia visual. El sitio incluye un menú de navegación en el encabezado, con enlaces a secciones principales como Home, Places, Museums, Contact y About Me, así como un menú "hamburguesa" en dispositivos móviles.

## 5. Formularios de Contacto

![Formulario de Contacto](ruta/a/tu/imagen-formulario-contacto.jpg)

El formulario de contacto se ha implementado usando el plugin **Contact Form 7**, permitiendo a los usuarios enviar consultas fácilmente. Después de enviar el formulario, el usuario es redirigido automáticamente a una página de agradecimiento ("Thank You"), que incluye un video embebido de YouTube. El shortcode utilizado es `[contact-form-7 id="84048a4" title="guide-bcn Form"]`.

## 6. CSS Extra y Accesibilidad

![Estilos CSS para accesibilidad](ruta/a/tu/imagen-css.jpg)

Se ha utilizado un archivo `style.css` personalizado para aplicar la paleta de colores neutros en tonos grises, asegurando una apariencia profesional y accesible. Además, se han realizado ajustes específicos para optimizar el diseño en dispositivos móviles, tabletas y escritorios.

## 7. Redirección después del Envío del Formulario

Se ha incluido una función JavaScript en el pie de página que redirige a los usuarios a una página de agradecimiento tras enviar el formulario de contacto.

## 8. Uso de Bloques y Código Personalizado en Páginas y Posts

![Ejemplo de HTML personalizado en posts](ruta/a/tu/imagen-html-personalizado.jpg)

Se han utilizado bloques de contenido personalizados para las categorías, mientras que cada página y post se ha diseñado con HTML personalizado para ofrecer una presentación visualmente atractiva y adaptada a cada tipo de contenido.

## 9. Conclusión

Durante el desarrollo de este proyecto se han enfrentado diversos retos que han permitido aprender sobre la implementación de un tema personalizado en WordPress. Cada elemento añadido mejora la navegabilidad y la experiencia de usuario, resultando en un sitio optimizado y funcional.
