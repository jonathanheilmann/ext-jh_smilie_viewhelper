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


InsertSmilies ViewHelper
^^^^^^^^^^^^^^^^^^^^^^^^

The InsertSmilies ViewHelper provides a list of all available smilies.
Klicking at a smilie will add the smilie place marker to the defined
input-field or textarea of a form.

Example:

::

   {namespace smilie=Tx_JhSmiliesViewhelper_ViewHelpers}

   <smilie:insertSmilies targetId="targetId"></smilie:insertSmilies>

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
         targetId

   Description
         The id of the input-field or textarea where the smilie should be
         added.

   Type
         string

   Default
         empty


.. container:: table-row

   Argument
         imgPath

   Description
         The relative path to the smilie-images.

   Type
         string

   Default
         typo3conf/ext/smilie/res/


.. ###### END~OF~TABLE ######

