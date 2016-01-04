from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_MainWindow(object):
    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(640, 480)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.webView = QtWebKitWidgets.QWebView(self.centralwidget)
        self.webView.setGeometry(QtCore.QRect(0, 0, 641, 458))
        self.webView.setUrl(QtCore.QUrl("http://10.175.20.119/cp2013/login.php"))
        self.webView.setObjectName("webView")
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 640, 23))
        self.menubar.setObjectName("menubar")
        self.menuADD = QtWidgets.QMenu(self.menubar)
        self.menuADD.setObjectName("menuADD")
        self.menuEDIT = QtWidgets.QMenu(self.menubar)
        self.menuEDIT.setObjectName("menuEDIT")
        self.menuUPDATE = QtWidgets.QMenu(self.menubar)
        self.menuUPDATE.setObjectName("menuUPDATE")
        self.menuREMOVE = QtWidgets.QMenu(self.menubar)
        self.menuREMOVE.setObjectName("menuREMOVE")
        MainWindow.setMenuBar(self.menubar)
        self.actionADD_EMP = QtWidgets.QAction(MainWindow)
        self.actionADD_EMP.setObjectName("actionADD_EMP")
        self.actionADD_EMP.triggered.connect(self.add)
        self.actionEDIT_EMP = QtWidgets.QAction(MainWindow)
        self.actionEDIT_EMP.setObjectName("actionEDIT_EMP")
        self.actionEDIT_EMP.triggered.connect(self.edit)
        self.actionUPDATE_SELERY = QtWidgets.QAction(MainWindow)
        self.actionUPDATE_SELERY.setObjectName("actionUPDATE_SELERY")
        self.actionUPDATE_SELERY.triggered.connect(self.update)
        self.actionREMOVE_EMP = QtWidgets.QAction(MainWindow)
        self.actionREMOVE_EMP.setObjectName("actionREMOVE_EMP")
        self.actionREMOVE_EMP.triggered.connect(self.remove)
        self.menuADD.addAction(self.actionADD_EMP)
        self.menuEDIT.addAction(self.actionEDIT_EMP)
        self.menuUPDATE.addAction(self.actionUPDATE_SELERY)
        self.menuREMOVE.addAction(self.actionREMOVE_EMP)
        self.menubar.addAction(self.menuADD.menuAction())
        self.menubar.addAction(self.menuEDIT.menuAction())
        self.menubar.addAction(self.menuUPDATE.menuAction())
        self.menubar.addAction(self.menuREMOVE.menuAction())

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)


    def add(self):
        print("add")
        self.webView.setUrl(QtCore.QUrl("http://10.175.20.119/cp2013/addEmployee.php"))
    def edit(self):
        print("edit")
        self.webView.setUrl(QtCore.QUrl("http://10.175.20.119/cp2013/editEmployee.php"))
    def update(self):
        print("update")
        self.webView.setUrl(QtCore.QUrl("http://10.175.20.119/cp2013/updateEmployee.php"))
    def remove(self):
        print("remove")
        self.webView.setUrl(QtCore.QUrl("http://10.175.20.119/cp2013/removeEmployee.php"))


    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "payrolls"))
        self.menuADD.setTitle(_translate("MainWindow", "ADD"))
        self.menuEDIT.setTitle(_translate("MainWindow", "EDIT"))
        self.menuUPDATE.setTitle(_translate("MainWindow", "UPDATE"))
        self.menuREMOVE.setTitle(_translate("MainWindow", "REMOVE"))
        self.actionADD_EMP.setText(_translate("MainWindow", "ADD_EMP"))
        self.actionEDIT_EMP.setText(_translate("MainWindow", "EDIT_EMP"))
        self.actionUPDATE_SELERY.setText(_translate("MainWindow", "UPDATE_SELERY"))
        self.actionREMOVE_EMP.setText(_translate("MainWindow", "REMOVE_EMP"))

from PyQt5 import QtWebKitWidgets

if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())
