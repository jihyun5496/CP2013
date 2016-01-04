from PyQt5 import QtCore, QtGui, QtWidgets
from PyQt5.QtWidgets import *
from PyQt5.QtCore import *
import sys,os
class Ui_Dialog(QDialog):
    def setupUi(self, Dialog):
        Dialog.setObjectName("Dialog")
        Dialog.resize(400, 270)
        Dialog.setAutoFillBackground(True)
        self.label = QtWidgets.QLabel(Dialog)
        self.label.setGeometry(QtCore.QRect(100, 180, 70, 20))
        self.label.setObjectName("label")
        self.label_2 = QtWidgets.QLabel(Dialog)
        self.label_2.setGeometry(QtCore.QRect(100, 210, 70, 20))
        self.label_2.setObjectName("label_2")
        self.lineEdit = QtWidgets.QLineEdit(Dialog)
        self.lineEdit.setGeometry(QtCore.QRect(170, 180, 130, 20))
        self.lineEdit.setObjectName("lineEdit")
        self.lineEdit_2 = QtWidgets.QLineEdit(Dialog)
        self.lineEdit_2.setGeometry(QtCore.QRect(170, 210, 130, 20))
        self.lineEdit_2.setObjectName("lineEdit_2")
        self.lineEdit_2.setEchoMode(QLineEdit.Password)
        self.label_3 = QtWidgets.QLabel(Dialog)
        self.label_3.setGeometry(QtCore.QRect(135, 10, 130, 150))
        self.label_3.setObjectName("label_3")
        self.pushButton = QtWidgets.QPushButton(Dialog)
        self.pushButton.setGeometry(QtCore.QRect(120, 235, 80, 20))
        self.pushButton.setObjectName("pushButton")
        self.pushButton.clicked.connect(self.accept)
        self.pushButton_2 = QtWidgets.QPushButton(Dialog)
        self.pushButton_2.setGeometry(QtCore.QRect(210, 235, 80, 20))
        self.pushButton_2.setObjectName("pushButton_2")
        self.pushButton_2.clicked.connect(QCoreApplication.instance().quit)
        self.retranslateUi(Dialog)
        QtCore.QMetaObject.connectSlotsByName(Dialog)
    def accept(self):

        if self.lineEdit.text().strip() == "admin" and self.lineEdit_2.text() == "admin":
            super(Ui_Dialog, self).accept()
            Dialog.hide()
            os.system('main.py')

        else:
            QMessageBox.warning(self,
                    "Caution",
                    "User name or password incorrect",
                    QMessageBox.Yes)
            self.lineEdit.setFocus()

    def retranslateUi(self, Dialog):
        _translate = QtCore.QCoreApplication.translate
        Dialog.setWindowTitle(_translate("Dialog", "Login Dialog"))
        self.label.setText(_translate("Dialog", "User name:"))
        self.label_2.setText(_translate("Dialog", "Passwaord :"))
        self.label_3.setText(_translate("Dialog", "<html><head/><body><p><img src=\":/images/images/login.png\"/></p></body></html>"))
        self.pushButton.setText(_translate("Dialog", "Login"))
        self.pushButton_2.setText(_translate("Dialog", "Cancel"))

import images_rc

if __name__ == "__main__":
    app = QtWidgets.QApplication(sys.argv)
    Dialog = QtWidgets.QDialog()
    ui = Ui_Dialog()
    ui.setupUi(Dialog)
    Dialog.show()
    sys.exit(app.exec_())