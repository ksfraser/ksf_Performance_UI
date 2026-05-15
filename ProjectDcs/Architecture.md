# Architecture - ksf_Performance_UI

## Document Information
- **Module**: ksf_Performance_UI
- **Version**: 1.0.0
- **Date**: 2026-05-11
- **Status**: Implemented
- **Author**: KSFII Development Team

---

## 1. Module Overview

ksf_Performance_UI provides the WordPress ESS user interface for Performance functionality.

### 1.1 Namespace
`Ksfraser\PerformanceUI`

### 1.2 Adapter Pattern
```
ksf_Performance (Business Logic)
    ↓
ksf_Performance_UI (WordPress ESS Adapter)
    ↓
    WordPress ESS Portal
```

---

## 2. Component Architecture

### 2.1 Presenter Layer

| Presenter | Description |
|-----------|-------------|
| ListPresenter | List page logic |
| FormPresenter | Form handling |
| DetailPresenter | Detail view logic |

### 2.2 AJAX Handlers

| Endpoint | Action | Description |
|----------|--------|-------------|
| ksf_Performance_list | getList | Get items |
| ksf_Performance_save | saveItem | Save item |
| ksf_Performance_delete | deleteItem | Delete item |

---

## 3. Integration

### Consumed From
| Module | Interface |
|--------|-----------|
| ksf_Performance | Business logic |

### WordPress Integration
| Hook | Description |
|------|-------------|
| wp_ajax_ksf_Performance | AJAX handlers |
| ksf_Performance_template | Page templates |

---

*Document Version: 1.0.0*
*Last Updated: 2026-05-11*
