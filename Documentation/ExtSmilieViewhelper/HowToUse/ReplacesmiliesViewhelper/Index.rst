.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


ReplaceSmilies ViewHelper
^^^^^^^^^^^^^^^^^^^^^^^^^

The ReplaceSmilies Viewhelper is used to replace the place marker with
the appropriate html image-tag when rendering the output.

Example:

::

   {namespace smilie=Tx_JhSmiliesViewhelper_ViewHelpers}

   <smilie:replaceSmilies value="{inputvalue}"></smilie:replaceSmilies>

Arguments:

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Argument
         Argument

   Description
         Description

   Type
         Type

   Default
         Default


.. container:: table-row

   Argument
         value

   Description
         The string with the place markers to be replaced by the appropriate
         html image-tag.

   Type
         string

   Default
         empty


.. ###### END~OF~TABLE ######

